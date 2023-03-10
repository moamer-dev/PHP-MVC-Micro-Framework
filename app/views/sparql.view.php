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

            <!-- Main columns -->
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <!-- Custom query form -->
                    <div class="col-8 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Select Query elements to build up the statement for you</h5>
                                <form class="row g-3">

                                    <div class="col-md-12 ">
                                        <label for="endpoint" class="form-label text-muted">Select an Endpoint</label>
                                        <select id="endpoint" class="form-select">
                                            <option selected disabled value>Select a dataset to query against</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/ckan1153/query">CKAN1153</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/ckan1368/query">CKAN1368</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/smw1153/query">SMW1153</option>
                                            <option value="https://service.tib.eu/lablsk-sparql/fuseki/#/dataset/smw1368/query">SMW1368</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="subject_1" class="form-label text-muted">Select a subject</label>
                                        <select id="subject_1" class="form-select">
                                            <option selected disabled value>Select a subject</option>
                                            <option value="?Dataset">Dataset</option>
                                            <option value="?Distribution">Distribution</option>
                                        </select>
                                        </div>

                                    <div class="col-md-4">
                                        <label for="predicate_1" class="form-label text-muted">Select a predicate</label>
                                        <select id="predicate_1" class="form-select">
                                            <option selected disabled value>Select a predicate</option>
                                            <option value=" ?Dataset dct:title ?Title ;">has a title</option>
                                            <option value=" dct:description ?Description ;">has a description</option>
                                            <option value="           dcat:distribution ?Distribution .">has a distribution</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="limit" class="form-label text-muted">Limit the number of results to</label>
                                        <input type="number" class="form-control" id="limit" value="100" required="">
                                    </div>

                                    <div class="col-md-4">
                                        
                                        <select id="subject_2" class="form-select">
                                            <option selected disabled value>and</option>
                                            <option value="?Dataset">Dataset</option>
                                            <option value="?Distribution">Distribution</option>
                                        </select>
                                        </div>

                                    <div class="col-md-4">
                                        
                                        <select id="predicate_2" class="form-select">
                                            <option selected disabled value>and</option>
                                            <option value=" ?Dataset dct:title ?Title ;">has a title</option>
                                            <option value=" dct:description ?Description ;">has a description</option>
                                            <option value="           dcat:distribution ?Distribution .">has a distribution</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="order" class="form-select">
                                            <option selected disabled value>Ordered by</option>
                                            <option value="ORDERED BY" >Dataset</option>
                                        </select>
                                    </div>

                                    
                                    <div class="text-center">
                                        <button  type="submit" class="btn btn-nfdi" style="width:25%">Create</button>
                                        <button type="reset" class="btn btn-secondary" style="width:25%">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End custom query form -->
                    
                    <!-- Help Card-->
                    <div class="col-lg-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Need some help!</h5>

                        <!-- Accordion without outline borders -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is subject?
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><code>rdf:subject</code> is an instance of <code>rdf:Property</code> that is used to state the subject of a statement. A triple of the form: <code>S rdf:subject R.</code> states that S is an instance of <code>rdf:Statement</code> and that the subject of S is R. <code>The rdfs:domain</code>  of <code>rdf:subject</code>  is </code> rdf:Statement</code>  .</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is predicate?
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The predicate of an RDF statement is the instance of <code>rdf:Property</code> identified by the predicate of the triple. The object of an RDF statement is the instance of <code>rdfs:Resource</code> identified by the object of the triple. <code>rdf:Statement</code> is in the domain of the properties <code>rdf:predicate</code> , <code>rdf:subject</code> and <code>rdf:object</code></div> 
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is object?
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><code>rdf:object</code> is an instance of <code>rdf:Property</code> that is used to state the object of a statement. A triple of the form: <code>S rdf:object O.</code> states that S is an instance of <code>rdf:Statement</code> and that the object of S is O. The <code>rdfs:domain</code> of <code>rdf:object</code> is <code>rdf:Statement</code> . The <code>rdfs:range</code> of <code>rdf:object</code> is <code>rdfs:Resource</code></div> 
                            </div>
                        </div>

                        </div>
                    </div><!-- End Accordion without outline borders -->
                    <a href="https://wiki.tib.eu/confluence/display/sfbinf/Example+Queries+against+Ckan1368+on+Jena+Fuseki+SPARQL+Endpoint" target="_blank">
                        <button class="btn btn-nfdi" type="button" style="width:100%; border-radius: 0px 0px 3px 3px">More Explained Queries</button>
                    </a>
                </div>
                </div> <!-- Closing row -->
                
                    <!-- Custom query form -->
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Reports <span>/Today</span></h5>
                            <div id="c681" class="ce html default-frame spacer-after-120 col-12">
                                <div id="yasgui"></div>
                                <script>

                                    const yasgui = new Yasgui(document.getElementById("yasgui"), {
                                        requestConfig: { endpoint: "https://nfdi4culture.de/sparql" },
                                        copyEndpointOnNewTab: false,
                                        yasqe: { value: 'PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#> SELECT * WHERE { ?sub ?pred ?obj .} LIMIT 10'},
                                        });
                                    // Get a reference to the form and button
                                    const form = document.querySelector('.row.g-3');
                                    const button = form.querySelector('button[type="submit"]');
                                    // Add an event listener to the button
                                    button.addEventListener('click', function(event) {
                                    event.preventDefault(); // prevent form submission
                                    const endpoint = form.querySelector('#endpoint').value;
                                    const subject_1 = form.querySelector('#subject_1').value;
                                    const subject_2 = form.querySelector('#subject_2').value;
                                    const predicate_1 = form.querySelector('#predicate_1').value;                                   
                                    const predicate_2 = form.querySelector('#predicate_2').value;
                                    const limit = form.querySelector('#limit').value;
                                    
                                    // Set the endpoint for the active tab
                                    const activeTab = yasgui.getTab();
                                        activeTab.setEndpoint(endpoint);


                                    const prefix = "PREFIX adms: <http://www.w3.org/ns/adms#>\n" +
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
                                    

                                    const options = //prefix + "\n" +
                                        "SELECT " + subject_1 + subject_2 + "\n" +
                                        "WHERE { " + predicate_1 + predicate_2 + " }\n" +
                                        "LIMIT " + limit;

                                    const query = prefix + options;

                                    //const activeTab = yasgui.getTab();
                                    const yasqe = activeTab.yasqe;
                                    yasqe.setValue(query);

                                    });

                                </script>

                                <script type="text/javascript">
                                    var _paq = _paq || [];
                                    _paq.push(["trackPageView"]);
                                    _paq.push(["enableLinkTracking"]);
                                </script>

                                <script>
                                    // Get the select elements for subject_1 and subject_2
                                    var subject1 = document.getElementById("subject_1");
                                    var subject2 = document.getElementById("subject_2");

                                    // Get the select elements for predicate_1 and predicate_2
                                    var predicate1 = document.getElementById("predicate_1");
                                    var predicate2 = document.getElementById("predicate_2");

                                    // Disable subject_2 and predicate_2
                                    subject2.disabled = true;
                                    predicate2.disabled = true;

                                    // Add an event listener to subject_1
                                    subject1.addEventListener("change", function() {
                                        // Enable subject_2 when an option is selected in subject_1
                                        subject2.disabled = false;

                                        // Disable any options in subject_2 that match the selected option in subject_1
                                        for (var i = 0; i < subject2.options.length; i++) {
                                            if (subject2.options[i].value === subject1.value) {
                                                subject2.options[i].disabled = true;
                                            } else {
                                                subject2.options[i].disabled = false;
                                            }
                                        }
                                    });

                                    // Add an event listener to predicate_1
                                    predicate1.addEventListener("change", function() {
                                        // Enable predicate_2 when an option is selected in predicate_1
                                        predicate2.disabled = false;

                                        // Disable any options in predicate_2 that match the selected option in predicate_1
                                        for (var i = 0; i < predicate2.options.length; i++) {
                                            if (predicate2.options[i].value === predicate1.value) {
                                                predicate2.options[i].disabled = true;
                                            } else {
                                                predicate2.options[i].disabled = false;
                                            }
                                        }
                                    });

                                    // Add an event listener to subject_2
                                    subject2.addEventListener("change", function() {
                                        // Disable any options in subject_1 that match the selected option in subject_2
                                        for (var i = 0; i < subject1.options.length; i++) {
                                            if (subject1.options[i].value === subject2.value) {
                                                subject1.options[i].disabled = true;
                                            } else {
                                                subject1.options[i].disabled = false;
                                            }
                                        }
                                    });

                                    // Add an event listener to predicate_2
                                    predicate2.addEventListener("change", function() {
                                        // Disable any options in predicate_1 that match the selected option in predicate_2
                                        for (var i = 0; i < predicate1.options.length; i++) {
                                            if (predicate1.options[i].value === predicate2.value) {
                                                predicate1.options[i].disabled = true;
                                            } else {
                                                predicate1.options[i].disabled = false;
                                            }
                                        }
                                    });

                                </script>



                            </div> 
                            </div>
                        </div>
                    </div><!-- End custom query form -->
                </div>
                
            </div><!-- Closing Main column -->

        </div><!-- Closing Main row -->

    </section>

  <?php $this->view('footer',$data) ?>