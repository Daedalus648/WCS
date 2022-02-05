<!-- Header section -->
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
</head>
<header>
    <h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
      Les Argonautes
    </h1>
  </header>
  
  <!-- Main section -->
  <main>
  
    <div class="picture-div">
      <div class="copyright-section1">
      <img class="picture1" src="{{ asset('/img/greek_statue.jpg') }}" alt="Image d'une statue de la Grèce antique. © Photo by Jianxiang Wu" />
      <p class="copyright">© Photo by Jianxiang Wu</p>
      </div>
      <div class="copyright-section2">
      <img class="picture2" src="{{ asset('/img/greek_statue1.jpg') }}" alt="Image d'une statue de la Grèce antique. © Photo by Peter Ivey-Hansen" />
      <p class="copyright">© Photo by Peter Ivey-Hansen</p>
      </div>
      <div class="copyright-section3">
      <img class="picture3" src="{{ asset('/img/greek_statue2.jpg') }}" alt="Image d'une statue de la Grèce antique. © Photo by David Ramírez" />
      <p class="copyright">© Photo by David Ramírez</p>
      </div>
      
    </div>
    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" action="/" method="POST">
      @csrf
      <label for="name">Nom de l&apos;Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Charalampos"/>
      <button type="submit">Envoyer</button>
    </form>
    <!-- Quotation -->
    <section class="quotation">
      <div class="sentence">"La sagesse commence dans l'émerveillement."</div>
      <div class="author">- Socrates</div>
    </section>
    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
      <div class="member-item">Eleftheria</div>
      <div class="member-item">Gennadios</div>
      <div class="member-item">Lysimachos</div>
      @foreach ($crew as $candidate)
      <div class="member-item">{{ $candidate->name }}</div>
      @endforeach
    </section>
  </main>
  
  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>