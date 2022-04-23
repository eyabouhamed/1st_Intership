
    <form action="{{route('ajoutersalle.adminSaveSalle')}}" method="POST">
    @csrf
    <label for="name">Ajouter Salle</label>
    <input name="Name_space" type="text">
    <input name="Place" type="text">
    <input name="Capacity" type="number">
    <input name="Owner_name" type="text">
    <input name="Owmer_phone" type="text">
    <input name="Price" type="number">
    <button type="submit">Save</button>
    </form>

    <form action="{{route('ajoutertroupe.adminSaveTroupe')}}" method="POST">
    @csrf
    <label for="name">Ajouter Troupe musicale</label>
    <input name="Name_group" type="text">
    <input name="Style" type="text">
    <input name="Nb_pers" type="number">
    <input name="Resp_name" type="text">
    <input name="Resp_phone" type="text">
    <input name="Price" type="number">
    <button type="submit">Save</button>
    </form>

    <form action="{{route('ajouterserveurs.adminSaveServeurs')}}" method="POST">
    @csrf
    <label for="name">Ajouter serveurs</label>
    <input name="Name_waiters" type="text">
    <input name="Nb_pers" type="number">
    <input name="Resp_name" type="text">
    <input name="Phone_name" type="number">
    <input name="Price" type="number">
    <button type="submit">Save</button>
    </form>

    <form action="{{route('ajoutercarte.adminSaveCarte')}}" method="POST">
    @csrf
    <label for="name">Ajouter Carte</label>
    <input name="Design" type="text">
    <input name="Capacity" type="number">
    <input name="Price" type="number">
    <button type="submit">Save</button>
    </form>
