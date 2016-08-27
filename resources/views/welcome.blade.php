<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
       
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/css/app.min.css" rel="stylesheet" type="text/css">
       
    </head>
    <body>
        @include('menu', array('items' => Lang::get('routes'), 'lang' =>LaravelLocalization::getCurrentLocale()))
        <div style="position: relative;">
            <div class="container-fluid cycle-slideshow" data-cycle-slides="> span" data-cycle-fx="scrollHorz" data-cycle-pager="#pager"   data-cycle-next="#next" data-cycle-prev="#prev">
                <span class="background-slider"  style="background-image: url('/dist/images/1980-2.jpeg');"></span>
                <span class="background-slider"  style="background-image: url('/dist/images/1980-3.jpeg');"></span> 
                <span class="background-slider"  style="background-image: url('/dist/images/1980-dow3nload.jpeg');"></span>
                <span class="background-slider"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></span>
                <span class="background-slider"  style="background-image: url('/dist/images/1980-1download.jpeg');"></span>
            </div>
            <div class="cycle-pager" id="pager"></div>
            <div class="controls">
                 <span id="prev">&lt;</span>
                 <span id="next">&gt;</span>
            </div>
        </div>
        
       <div class="strip">
           <div class="my-container center">
               <div class="my-col">
                   Looking for a quality and affordable constructor for your next project?
               </div>
               <div class="my-col">
                   Get quote
               </div>
           </div>
       </div>
       <div class="my-container extend" style="margin-top: 30px">
           <div class="about text-center h2">
               <h3 class="h2 h3_under">Who we are</h3> 
           </div>
           <div class="about-pic">
               <img style="max-width: 100%" src="http://demo.joomlavi.com/j3/jv-structure/images/uploads/photo01.jpg" />
           </div>
         
           <div class="about-text">
               <p>Embedded in our culture of hard work, honesty, and getting the well done job, our history tells not only much about our past but also it does our present. Our record of succeeding, surviving, and striving to be the best is central to our reputation today.</p>
               <p style="margin-top: 20px">Embedded in our culture of hard work, honesty, and getting the well done job, our history tells not only much about our past but also it does our present. Our record of succeeding, surviving, and striving to be the best is central to our reputation today.</p>
           </div>
       </div>
       
       <div class="my-container centered" style="margin-top: 35px; background-color: #1b273d">
           <div class="specialty">
               <div class="background-slider renovation" style="background-image: url('/dist/images/1980-bathroom-ceramic-tiles-12.jpg')"></div>
               <h4 class="h3">Experience in tile work</h4>
               <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.</p>
           </div>
           <div class="specialty">
               <div class="background-slider renovation" style="background-image: url('/dist/images/1980-Exterior-Painting.jpg')"></div>
               <h4 class="h3">Facade painting and renovation</h4>
               <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.</p>
           </div>
       </div>
      <div class="my-container centered" style="margin-top: 35px">
          <div class="buttons">
              <div class="skills" id="1" style="background-color: #1b273d; color:#ffb600;">Why choose us?</div>
              <div class="skills" id="2">Our expertise?</div>
              <div class="skills" id="3">Our commitment?</div>
              <div class="skills" id="4">Our vision?</div>
          </div>
          <div class="skills-text">
              <div class="shows" id="skill_1">
                  <h4 class="h2 h3_under text-center">Why choose us?</h4>
                  <p style="margin-top: 20px">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posu.</p>
              </div>
               <div class="shows" id="skill_2" style="display: none">
                  <h4 class="h2 h3_under text-center">Our expertise?</h4>
                  <p style="margin-top: 20px">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posu.</p>
              </div>
               <div class="shows" id="skill_3" style="display: none">
                  <h4 class="h2 h3_under text-center">Our commitment?</h4>
                  <p style="margin-top: 20px">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posu.</p>
              </div>
               <div class="shows" id="skill_4" style="display: none">
                  <h4 class="h2 h3_under text-center">Our vision?</h4>
                  <p style="margin-top: 20px">Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posu.</p>
              </div>
          </div>
      </div>
      
      <div class="my-container background-opacity">
        <div>
            <h4 class="h2 h3_under text-center">Our latest projects</h4>
            <div class="small-controls">
                <div>
                    <span id="prev_small">&#9664;</span>
                    <span id="next_small">&#9654;</span>
                </div>
            </div>
            <div class="project-images current" id="project-1">
                <div class="background-slider"  style="background-image: url('/dist/images/1980-2.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-3.jpeg');"></div> 
                <div class="background-slider"  style="background-image: url('/dist/images/1980-dow3nload.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></div>
            </div>
            <div class="project-images right" id="project-2">
                
                <div class="background-slider"  style="background-image: url('/dist/images/1980-3.jpeg');"></div> 
                <div class="background-slider"  style="background-image: url('/dist/images/1980-dow3nload.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-1download.jpeg');"></div>
            </div>
            <div class="project-images right" id="project-3">
                
                <div class="background-slider"  style="background-image: url('/dist/images/1980-dow3nload.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-downloa2d.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-1download.jpeg');"></div>
                <div class="background-slider"  style="background-image: url('/dist/images/1980-2.jpeg');"></div>
            </div>
        </div>
      </div>  
      
      <div class="my-container extend" style="margin-top: 35px">
          <div class="partners-parent">
              <h4 class="h2 h3_partners text-center">Partners</h4>
          </div>
          <div class="partners">
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_01.jpg" />
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_02.jpg" />
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_03.jpg" />
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_04.jpg" />
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_05.jpg" />
              <img src="https://demo.proteusthemes.com/structurepress/wp-content/uploads/sites/28/2015/11/client_06.jpg" />
          </div>
          
      </div>
        <br /><br />
        @include('footer')
        <script src="/js/cycle.js"></script>
        <script type="text/javascript" src="/js/app.min.js"></script>
        <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://laravel-manu-wildman2bad.c9users.io:8082/browser-sync/browser-sync-client.2.13.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
    </body>
</html>
