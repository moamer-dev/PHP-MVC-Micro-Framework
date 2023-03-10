  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?=ROOT?>">
          <i class="bi bi-grid"></i>
          <span>NFDI4Chem</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Datasets</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?=ROOT?>/home/ckan">
              <i class="bi bi-circle"></i><span>CKAN 1153</span>
            </a>
          </li>
          <li>
            <a href="ckan">
              <i class="bi bi-circle"></i><span>CKAN 1368</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SMW 1153</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SMW 1368</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=ROOT?>/sparql">
          <i class="bi bi-braces"></i>
          <span>Generate a SPARQL Query</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-heading">Extras</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://www.nfdi4chem.de/" target="_blank">
          <i class="bi bi-camera-video"></i>
          <span>NFDI4Chem</span>
        </a>
      </li><!-- End My Courses Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="https://terminology.nfdi4chem.de/ts/" target="_blank">
          <i class="bi bi-person-video3"></i>
          <span>Terminology Service</span>
        </a>
      </li><!-- End Enrolled Courses Page Nav -->

      
    </ul>

  </aside><!-- End Sidebar-->