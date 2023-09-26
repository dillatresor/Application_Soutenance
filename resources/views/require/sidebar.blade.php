<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class=""></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION ETUDIANT</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('etudiants.index') }}">
          <i class="bi bi-circle"></i><span>Liste des etudiants</span>
        </a>
      </li>
      <li>
        <a href="{{ route('etudiants.create') }}">
          <i class="bi bi-circle"></i><span>Ajouter un Etudiant</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION SOUTENANCE</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('soutenances.index') }}">
          <i class="bi bi-circle"></i><span>Liste demande</span>
        </a>
      </li>
      <li>
        <a href="{{ route('soutenances.create') }}">
          <i class="bi bi-circle"></i><span>Ajouter une demande</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION ENSEIGNANT</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('enseignants.index') }}">
          <i class="bi bi-circle"></i><span>liste des Enseignants</span>
        </a>
      </li>
      <li>
        <a href="{{ route('enseignants.create') }}">
          <i class="bi bi-circle"></i><span>Ajouter Enseignant</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->



  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION JURY</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('jury.index') }}">
          <i class="bi bi-circle"></i><span>Liste du jury</span>
        </a>
     <a href="{{ route('jury.create') }}">
            <i class="bi bi-circle"></i><span>Ajouter un jury</span>
          </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION SALLE</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('salle.index') }}">
          <i class="bi bi-circle"></i><span>Liste des salles</span>
        </a>
      </li>
      <li>
        <a href="{{ route('salle.create') }}">
          <i class="bi bi-circle"></i><span>Ajouter Salle</span>
        </a>
      </li>

    </ul><!-- End salle Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class=""></i><span>GESTION DM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('dm.index') }}">
              <i class="bi bi-circle"></i><span>Liste Directeur M</span>
            </a>
          </li>
          <li>
            <a href="{{ route('dm.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter un DM</span>
            </a>
          </li>


</ul>
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class=""></i><span>GESTION MAITRE .S</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('ms.index') }}">
          <i class="bi bi-circle"></i><span>Liste Maitres .S</span>
        </a>
      </li>
      <li>
        <a href="{{ route('ms.create') }}" >
          <i class="bi bi-circle"></i><span>Ajouter Maitre .S</span>
        </a>
      </li>


</aside><!-- End Sidebar-->
