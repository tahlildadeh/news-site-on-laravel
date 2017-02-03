@extends('master')
@section('item')



<section id="newsSection">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="latest_newsarea"> <span>اخرین اخبار</span>
        <ul id="ticker01" class="news_sticker">
          @foreach($top10 as $top10Value)

          <li><a href="/news/{{$top10Value->id}}"><img src="/images/{{$top10Value->imgNews}}" alt="">{{$top10Value->name}}</a></li>


          @endforeach
        </ul>
        <div class="social_area">
          <ul class="social_nav">
            <li class="facebook"><a href="#"></a></li>
            <li class="twitter"><a href="#"></a></li>
            <li class="flickr"><a href="#"></a></li>
            <li class="pinterest"><a href="#"></a></li>
            <li class="googleplus"><a href="#"></a></li>
            <li class="vimeo"><a href="#"></a></li>
            <li class="youtube"><a href="#"></a></li>
            <li class="mail"><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

 

<section id="contentSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="left_content">
        <div class="single_post_content">
          <h2><span>سیاسی</span></h2>
          <div class="single_post_content_left">
            <ul class="business_catgnav  wow fadeInDown">
              <li>
            <a href="/news/{{$itemsG1[0]['id']}}" class="featured_img"> <img width="300" style="display: block;" alt="{{$itemsG1[0]['name']}}" src="/images/{{$itemsG1[0]['id']}}.jpg"> <span class="overlay"></span> </a>
               <a href="/news/{{$itemsG1[0]['id']}}">
                {{$itemsG1[0]['name']}}
               </a> 
                 <p>{{$itemsG1[0]['intro_text']}}</p>
           

              </li>
            </ul>
          </div>
          <div class="single_post_content_right">
            <ul class="spost_nav">



            @for ($i = 1; $i < 4; $i++)
              <li>
                <div class="media wow fadeInDown"> <a href="/news/{{$itemsG1[$i]['id']}}" class="media-left"> <img alt="" src="/images/{{$itemsG1[$i]['id']}}.jpg"> </a>
                  <div class="media-body"> <a href="/news/{{$itemsG1[$i]['id']}}" class="catg_title">{{$itemsG1[$i]['name']}}</a> </div>
<!--                   <span>{{date('y-m-d  h:i:s,$items->time_item')}}<span>
 -->                  </div>
                </li>

                @endfor





              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span> ورزشی</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>


                    <figure class="bsbig_fig"> <a href="/news/{{$itemsG2[0]['id']}}" class="featured_img">
                     <img alt="" src="/images/{{$itemsG2[0]['id']}}.jpg"> <span class="overlay"></span>
                     </a>
                      <figcaption> <a href="/news/{{$itemsG2[0]['id']}}">{{$itemsG2[0]['name']}}</a> </figcaption>
                      <p>{{$itemsG2[0]['intro_text']}}</p>
                    </figure>



                  </li>
                </ul>
                <ul class="spost_nav">
                  @for ($i = 1 ; $i< 4 ; $i++)
                  <li>
                    <div class="media wow fadeInDown"> <a href="/news/{{$itemsG2[$i]['id']}}" class="media-left"> <img alt="" src="/images/{{$itemsG2[$i]['id']}}.jpg"> </a>
                      <div class="media-body"> <a href="/news/{{$itemsG2[$i]['id']}}" class="catg_title">{{$itemsG2[$i]['name']}}</a> </div>
                    </div>
                  </li>

                  @endfor


                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span> اجتماعی</span></h2>
                <ul class="business_catgnav">


                  <li>
                    <figure class="bsbig_fig wow fadeInDown">
                     <a href="/news/{{$itemsG3[0]['id']}}" class="featured_img">

                     <img alt="" src="images/{{$itemsG3[0]['id']}}.jpg">

                      <span class="overlay"></span> </a>
                      <figcaption> <a href="/news/{{$itemsG3[0]['id']}}">{{$itemsG3[0]['name']}}</a> </figcaption>
                      <p>{{$itemsG3[0]['intro_text']}}...</p>
                    </figure>
                  </li>


                </ul>



                <ul class="spost_nav">
                    @for ($i = 1 ; $i< 4 ; $i++)
                  <li>
                    <div class="media wow fadeInDown"> <a href="/news/{{$itemsG3[$i]['id']}}" class="media-left"> <img alt="" src="/images/{{$itemsG3[$i]['id']}}.jpg"> </a>
                      <div class="media-body"> <a href="/news/{{$itemsG3[$i]['id']}}" class="catg_title">{{$itemsG3[$i]['name']}}</a> </div>
                    </div>
                  </li>

                  @endfor
                
                
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>مطالب تصادفی</span></h2>
            <ul class="spost_nav">


@foreach($randnews as $rand)

              <li>
                <div class="media wow fadeInDown"> <a href="/news/{{$rand->id}}" class="media-left"> 
                <img alt="" src="images/{{$rand->id}}.jpg"> </a>
                  <div class="media-body"> <a href="/news/{{$rand->id}}" class="catg_title">
{{$rand->name}}
                  </a> </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">

                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
            
          </aside>
        </div>
      </div>
    </section>

    @Stop