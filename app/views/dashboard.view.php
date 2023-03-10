<?php $this->view('header',$data) ?>


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=ROOT?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row col-lg-12 m-auto">

        <!-- Left side columns -->
        <div class="col-lg-10 m-auto">
            <!-- Dataset side columns -->
            <div class="col-12 m-auto">
              <div class="card">
                <div class="card-body justify-content-center align-items-center">
                  <h5 class="card-title">Available Dataset to query against</h5>
                    <div>
                      <a href="<?=ROOT?>/home/ckan">
                        <button type="button" class="btn btn-nfdi mx-1">CKAN 1153</button>
                      </a>
                      <button type="button" class="btn btn-nfdi mx-1">CKAN 1368</button>
                      <button type="button" class="btn btn-nfdi mx-1">SMW 1153</button>
                      <button type="button" class="btn btn-nfdi mx-1">SMW 1368</button>
                    </div>
                </div>
              </div>
            </div><!-- End dataset side columns -->

            <!-- Query Card -->
            <div class="col-12 m-auto">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>
                  <div id="c681" class="ce html default-frame spacer-after-120 col-12">
                    <div id="yasgui"></div>
                      <script>
                         var prefix =  "PREFIX adms: <http://www.w3.org/ns/adms#>\n" +
                                      "PREFIX dcat: <http://www.w3.org/ns/dcat#>\n" +
                                      "PREFIX foaf: <http://xmlns.com/foaf/0.1/>\n" +
                                      "PREFIX gsp: <http://www.opengis.net/ont/geosparql#>\n" +
                                      "PREFIX hydra: <http://www.w3.org/ns/hydra/core#>\n" +
                                      "PREFIX owl: <http://www.w3.org/2002/07/owl#>\n" +
                                      "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>\n" +
                                      "PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>\n" +
                                      "PREFIX schema: <http://schema.org/>\n" +
                                      "PREFIX spdx: <http://spdx.org/rdf/terms#>\n" +
                                      "PREFIX vcard: <http://www.w3.org/2006/vcard/ns#>\n" +
                                      "PREFIX xml: <http://www.w3.org/XML/1998/namespace>\n" +
                                      "PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>\n"
                                      ;

                    var default_query = prefix + 
                        "SELECT ?Distribution ?Description ?Title ?Format ?Media_Type ?Acssess_URL WHERE { \n"+
                        "?Dataset a dcat:Dataset .\n"+
                        "?Dataset dct:description ?Description ;\n"+
                        "dct:title ?Title ;\n"+
                        "dct:issued ?Issued ;\n"+
                        "dct:publisher ?Publisher ;\n"+
                        "dcat:distribution ?Distribution ;\n"+
                        "} LIMIT 100";

                        // Set up the Yasgui editor
                        const yasgui = new Yasgui(document.getElementById("yasgui"), {
                          requestConfig: {
                            endpoint: "https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/ckan1153/query",
                            headers: {
                                Authorization: "Basic " + btoa("admin:NFDI4ChemFuseki")
                              }
                            },
                              copyEndpointOnNewTab: false,
                              yasqe: { value: default_query},
                            });
                            
                      </script>
                      <script type="text/javascript">
                          var _paq = _paq || [];
                          _paq.push(["trackPageView"]);
                          _paq.push(["enableLinkTracking"]);
                      </script>
                  </div> 
                </div>
              </div>
            </div><!-- End Left side columns -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>


  <?php $this->view('footer',$data) ?>