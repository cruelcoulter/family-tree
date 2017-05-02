<!--[if lte IE 8]>
          <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
      <![endif]-->
      <!--[if gt IE 8]><!-->
          <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
      <!--<![endif]-->
      
      <style>
      .custom-wrapper {
          background-color: #ffd390;
          margin-bottom: 1em;
          -webkit-font-smoothing: antialiased;
          height: 2.1em;
          overflow: hidden;
          -webkit-transition: height 0.5s;
          -moz-transition: height 0.5s;
          -ms-transition: height 0.5s;
          transition: height 0.5s;
      }
      
      .custom-wrapper.open {
          height: 14em;
      }
      
      .custom-menu-3 {
          text-align: right;
      }
      
      .custom-toggle {
          width: 34px;
          height: 34px;
          display: block;
          position: absolute;
          top: 0;
          right: 0;
          display: none;
      }
      
      .custom-toggle .bar {
          background-color: #777;
          display: block;
          width: 20px;
          height: 2px;
          border-radius: 100px;
          position: absolute;
          top: 18px;
          right: 7px;
          -webkit-transition: all 0.5s;
          -moz-transition: all 0.5s;
          -ms-transition: all 0.5s;
          transition: all 0.5s;
      }
      
      .custom-toggle .bar:first-child {
          -webkit-transform: translateY(-6px);
          -moz-transform: translateY(-6px);
          -ms-transform: translateY(-6px);
          transform: translateY(-6px);
      }
      
      .custom-toggle.x .bar {
          -webkit-transform: rotate(45deg);
          -moz-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
      }
      
      .custom-toggle.x .bar:first-child {
          -webkit-transform: rotate(-45deg);
          -moz-transform: rotate(-45deg);
          -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
      }
      
      @media (max-width: 47.999em) {
      
          .custom-menu-3 {
              text-align: left;
          }
      
          .custom-toggle {
              display: block;
          }
      
      }
      </style>
      <div class="custom-wrapper pure-g" id="menu">
          <div class="pure-u-1 pure-u-md-1-3">
              <div class="pure-menu">
                  <a href="https://cruelcoulter.com" class="pure-menu-heading custom-brand">Cruel Coulter</a>
                  <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
              </div>
          </div>
          <div class="pure-u-1 pure-u-md-1-3">
              <div class="pure-menu pure-menu-horizontal custom-can-transform">
                  <ul class="pure-menu-list">
                      <li class="pure-menu-item"><a href="https://cruelcoulter.com/family-tree" class="pure-menu-link">Home</a></li>
                      <li class="pure-menu-item"><a href="https://cruelcoulter.com/family" class="pure-menu-link">Ron's family</a></li>
                      <li class="pure-menu-item"><a href="https://twitter.com/cruelcoulter" class="pure-menu-link">Twitter</a></li>
                  </ul>
              </div>
          </div>
          <div class="pure-u-1 pure-u-md-1-3">
              <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
                  <ul class="pure-menu-list">
                      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Family Search</a></li>
                      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Wiki Tree</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <script>
      (function (window, document) {
      var menu = document.getElementById('menu'),
          WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';
      
      function toggleHorizontal() {
          [].forEach.call(
              document.getElementById('menu').querySelectorAll('.custom-can-transform'),
              function(el){
                  el.classList.toggle('pure-menu-horizontal');
              }
          );
      };
      
      function toggleMenu() {
          // set timeout so that the panel has a chance to roll up
          // before the menu switches states
          if (menu.classList.contains('open')) {
              setTimeout(toggleHorizontal, 500);
          }
          else {
              toggleHorizontal();
          }
          menu.classList.toggle('open');
          document.getElementById('toggle').classList.toggle('x');
      };
      
      function closeMenu() {
          if (menu.classList.contains('open')) {
              toggleMenu();
          }
      }
      
      document.getElementById('toggle').addEventListener('click', function (e) {
          toggleMenu();
          e.preventDefault();
      });
      
      window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
      })(this, this.document);
      
      </script>