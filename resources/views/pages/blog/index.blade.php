
        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        
                        <i class="bi bi-hash fs-4 text-primary"></i>
                        Interessante Neuigkeiten & Blogartikel
                    </span>
                    <h2>Hier ensteht ein gepflegtest Informationsarchiv von FirstBioDent</h2>
                </div>


                   <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/holistic-dentistry"><img src="/template-assets/images/blog/blog-1.jpg" alt="image"></a>
                                <!--
                                <div class="tag">10 Jun</div>
                                -->
                                <div class="tag-two"><a href="/blog">Ganzheitliche Zahnmedizin</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/holistic-dentistry">Ganzheitliche Zahnmedizin in Düsseldorf</a>
                                </h3>
                                <p>Ganzheitliche Zahnmedizin betrachtet Zähne, Mundhöhle und Kiefer nicht isoliert vom restlichen Organismus.</p>
                                <div class="text-end">
                                    <a href="/holistic-dentistry" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/detox"><img src="/template-assets/images/blog/blog-3.jpg" alt="image"></a>
                                <!--
                                <div class="tag">12 Jun</div>
                                -->
                                <div class="tag-two"><a href="/detox">Detox</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/detox">DETOX in Düsseldorf – Körper und Mundraum entgiften</a>
                                </h3>
                                <p>Schwermetalle, wie Palladium, aus Zahngoldlegierungen, Quecksilber in Amalgamfüllungen, Arsen im Reis...</p>
                                <div class="text-end">
                                    <a href="/detox" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    @foreach($blogPosts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog/{{$post->slug}}"><img src="{{$post->image}}" alt="image"></a>
                                <!--
                                <div class="tag">11 Jun</div>
                                -->
                                <div class="tag-two"><a href="/blog/{{$post->slug}}">{{$post->title}}</a></div>
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
                                </h3>
                                <p>
                                    {{ substr($post->content, 0, 102) . "..."; }}
                                </p>
                                <div class="text-end">
                                    <a href="/blog/{{$post->slug}}" class="blog-btn">Mehr Lesen</a>
                                </div>

                                <ul class="entry-meta">
                                    <li>
                                        <i class='bx bxs-user'></i>
                                        <span>Von <a href="/doc/main">Dr. Med. Hansjörg Lammers</a></span>
                                    </li>
                                    <!--
                                    <li>
                                        <i class='bx bxs-comment'></i>
                                        2 Comments
                                    </li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!--
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class='flaticon-left-arrow'></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers">
                                <i class='flaticon-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
