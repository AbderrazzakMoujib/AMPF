<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Offre;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdhesionRequest;
use App\Mail\ContactMessage;

class AmpfController extends Controller
{
    public function home()
    {
        $myposts = Post::whereStatus('PUBLISHED')
            ->where('type', 'actualite')
            ->latest()->limit(6)->get();

        $evenements_avenir = Post::whereStatus('PUBLISHED')
            ->where('type', 'evenement_avenir')
            ->whereDate('event_date', '>=', now())
            ->orderBy('event_date', 'asc')->get();

        $evenements_passes = Post::whereStatus('PUBLISHED')
            ->where('type', 'evenement_passe')
            ->orderBy('event_date', 'desc')->get();

        $allEvents = $evenements_avenir->concat($evenements_passes);

        return view('Principal.home', compact('myposts', 'evenements_avenir', 'evenements_passes', 'allEvents'));
    }

    public function about()         { return view('Principal.about'); }
    public function nos_Valeurs()   { return view('Principal.nos_Valeurs'); }
    public function nos_Objectifs() { return view('Principal.nos_Objectifs'); }

    // ✅ Renamed: accent supprimé (é → e) pour éviter les problèmes de charset
    public function nos_strategie() { return view('Principal.nos_stratégie'); }

    public function commissions()   { return view('Principal.commissions'); }
    public function nos_formule()   { return view('Principal.nos_formule'); }
    public function media()         { return view('Principal.media'); }
    public function contact()       { return view('Principal.contact'); }
    public function offre()         { return view('Principal.offre'); }

    public function politique()     { return view('politique');  }

    public function conditions()    { return view('conditions');  }

    public function mot_president()
{
    return view('Principal.mot_president');
}

public function partenaires()
{
    return view('Principal.partenaires');
}
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        $contact = Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        try {
            Mail::to('contact@ampf.ma')->send(new ContactMessage($contact));
        } catch (\Exception $e) {
            \Log::error('Contact email failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')
            ->with('success', __('contact.success_msg'));
    }

    public function store_offre(Request $request)
    {
        $request->validate([
            'full_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'company_name' => 'required|string|max:255',
            'phone'        => 'nullable|string|max:20',
            'adresse'      => 'nullable|string|max:500',
            'type_offre'   => 'required|in:600,1000,1500,3000,6000,12000,40000',
        ]);

        $offre = Offre::create([
            'full_name'    => $request->full_name,
            'email'        => $request->email,
            'company_name' => $request->company_name,
            'phone'        => $request->phone,
            'adresse'      => $request->adresse,
            'type_offre'   => $request->type_offre,
            'status'       => 'pending',
        ]);

        try {
            Mail::to('adhesion@ampf.ma')->send(new AdhesionRequest($offre));
        } catch (\Exception $e) {
            \Log::error('Adhesion email failed: ' . $e->getMessage());
        }

        return redirect()->route('offre')
            ->with('success', __('offre.success_msg'));
    }

    public function newsletter(Request $request)
    {
        $request->validate(['email_newsletter' => 'required|email|max:255']);
        Newsletter::firstOrCreate(['email_newsletter' => $request->email_newsletter]);
        return back()->with('newsletter_success', app()->getLocale() === 'en'
            ? 'Thank you! You are now subscribed to our newsletter.'
            : 'Merci ! Vous êtes abonné à notre newsletter.');
    }
}
