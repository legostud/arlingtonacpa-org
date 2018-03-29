<!DOCTYPE html>
<html>
<head>
  <title>Meeting Locations - Chronic Pain Support Group, Arlington, MA</title>
  <?php include './include/head.php' ?>
</head>
<body>
  <?php include './include/header.php' ?>
  <main class="main">
    <div class="main__nav">
      <?php include './include/main-nav.php' ?>
    </div>
    <section class="main__content" id="main-content">
      <div class="main__title"><h1>Meeting Locations</h1></div>
      <div class="main__text rich-text">
        <p>Our Meetings are usually held at the Robbins Library in Arlington, Ma. with an occasional meeting at one of the alternate locations listed.  See <a href="meetings.php">Schedule of Meetings</a> page for details</p>
      </div>
      <div class="locations">
        <div class="locations__address">
          <a href="http://www.robbinslibrary.org" target="_blank">Robbins Library</a><br />
          700 Mass Ave<br />
          Arlington, MA 02476
        </div>
        <!-- div class="locations__address">
          <a href="http://www.robbinslibrary.org/about/fox-branch" target="_blank">Fox Library</a><br />
          175 Mass Ave<br />
          Arlington, MA 02474
        </div -->
        <!-- div class="locations__address">
          <a href="http://arlingtonseniorsassociation.org" target="_blank">Arlington Senior Center</a><br />
          27 Maple Street<br />
          Arlington, MA 02476
        </div -->
        <div class="locations__address">
          <a href="http://www.sunriseseniorliving.com" target="_blank">Sunrise Assisted Living</a><br />
          1395 Mass Ave<br />
          Arlington, MA 02476
        </div>
        <div class="locations__address">
          <a href="http://www.stpaularlington.org/" target="_blank">St Paul Lutheran Church</a><br />
          929 Concord Turnpike<br />
          Arlington, MA 02476
        </div>
      </div>

      <!-- the map layer is dynamically loaded with a google map - leave blank -->
      <div class="google-map js-google-map"></div>
      <script>
        var googleMapData = googleMapData || [];

        googleMapData.push({
          map: {
            center: {
              lat: 42.417196,
              lng: -71.168398
            },
            zoom: 14
          },
          markers: [
            {
              position: {
                lat: 42.415762, 
                lng: -71.154967 
              },
              label: "R", // single character only
              infoWindow: {
                name: "Robbins Library", // raw was needed to prevent rendering ascii characters
                link: "http://www.robbinslibrary.org",
                address: "700 Mass Ave<br />Arlington, MA 02476"
              }
            },
            // {
            //   position: {
            //     lat: 42.405519, 
            //     lng: -71.141689 
            //   },
            //   label: "F", // single character only
            //   infoWindow: {
            //     name: "Fox Library", // raw was needed to prevent rendering ascii characters
            //     link: "http://www.robbinslibrary.org/about/fox-branch",
            //     address: "175 Mass Ave<br />East Arlington, MA 02474"
            //   }
            // },
            // {
            //   position: {
            //     lat: 42.4154392, 
            //     lng: -71.1525275 
            //   },
            //   label: "J", // single character only
            //   infoWindow: {
            //     name: "Jefferson Cutter House", // raw was needed to prevent rendering ascii characters
            //     link: "http://www.town.arlington.ma.us/public_documents/ArlingtonMA_Rental/JeffersonCutterHouse/index",
            //     address: "Corner of Mystic St. and Mass Ave<br />Arlington, MA 02476"
            //   }
            // },
            {
              position: {
                lat: 42.425019, 
                lng: -71.186169 
              },
              label: "S", // single character only
              infoWindow: {
                name: "Sunrise Assisted Living", // raw was needed to prevent rendering ascii characters
                link: "http://www.sunriseseniorliving.com",
                address: "1395 Mass Ave<br />Arlington, MA 02476"
              }
            },
            // {
            //   position: {
            //     lat: 42.415132, 
            //     lng: -71.156809 
            //   },
            //   label: "A", // single character only
            //   infoWindow: {
            //     name: "Arlington Senior Center",
            //     link: "http://arlingtonseniorsassociation.org",
            //     address: "27 Maple Street<br />Arlington, MA 02476"
            //   }
            // },
            // {
            //   position: {
            //     lat: 42.419428, 
            //     lng: -71.152037 
            //   },
            //   label: "P", // single character only
            //   infoWindow: {
            //     name: "Arlington Police Building",
            //     link: "http://www.arlingtonma.gov/departments/police",
            //     address: "112 Mystic Street<br />Arlington, MA 02474"
            //   }
            // }
            {
              position: { 
                lat: 42.413139, 
                lng: -71.186365 
              },
              label: "P", // single character only
              infoWindow: {
                name: "St Paul Lutheran Church",
                link: "http://www.stpaularlington.org/",
                address: "929 Concord Turnpike<br />Arlington, MA 02476"
              }
            }
          ]
        });
      </script>
    </section>
  </main>
  <?php include './include/foot.php' ?>
  <script src="/include/google-map.js"></script>
</body>
</html>
