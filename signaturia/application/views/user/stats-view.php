<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Share Generator</title>
  <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="bg-[#EDF1F8]">
  <header class="lg:hidden p-4 bg-white sticky top-0 z-10 shadow-sm">
    <div class="flex items-center flex-wrap justify-between">
      <svg class="h-6 w-6 burger-menu cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <a href="index.html"><img class="max-w-[150px]" src="image/logo.png" alt=""></a>
      <div class="flex items-center justify-between cursor-pointer space-x-4 relative profile-menu">
        <ul class="absolute top-[calc(100%+19px)] right-0 hidden profile-items bg-white shadow-md min-w-[190px]">
          <li><a href="#" class="text-primary hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <title>94 user</title>
                <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z" />
                <path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z" />
              </svg>My Profile</a></li>
          <li><a href="#" class="text-primary hover:text-opacity-100 duration-300 ease-in-out text-opacity-70 flex items-center py-3 px-8 rounded-md text-sm font-medium"><svg fill="currentColor" class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <title>191 log out</title>
                <path d="M7,22H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z" />
                <path d="M18.538,18.707l4.587-4.586a3.007,3.007,0,0,0,0-4.242L18.538,5.293a1,1,0,0,0-1.414,1.414L21.416,11H6a1,1,0,0,0,0,2H21.417l-4.293,4.293a1,1,0,1,0,1.414,1.414Z" />
              </svg> Logout</a></li>
        </ul>
        <img class="rounded-[10px]" src="image/Rectangle 145.png" alt="">
        <span class="hidden sm:inline-block">Terry Garrett</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="3" height="13" viewBox="0 0 3 13">
          <g id="fi-rr-menu-dots-vertical" transform="translate(-10.064 0.878)">
            <circle id="Ellipse_40" data-name="Ellipse 40" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 -0.878)" fill="currentColor" />
            <circle id="Ellipse_41" data-name="Ellipse 41" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 4.122)" fill="currentColor" />
            <circle id="Ellipse_42" data-name="Ellipse 42" cx="1.5" cy="1.5" r="1.5" transform="translate(10.064 9.122)" fill="currentColor" />
          </g>
        </svg>
      </div>
    </div>
  </header>

  <div class="fixed inset-0 bg-black z-10 opacity-0 duration-300 hidden sidebar-bg"></div>
  <div class="p-4 lg:p-6 xl:p-16 lg:ml-72 ">
    <span class="text-primary mb-4 min-h-[40px] hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Keep
      track the Performance</span>
    <p class="bg-white px-11 py-6 rounded-[5px] overflow-hidden text-sm font-medium relative before:absolute before:inset-y-0 before:left-0 before:bg-secondary before:w-2">
      On average, one person spends 3 hours per work day sending emails. Keep track of the performance of these email
      signatures and track the Performance which social platform your customers and
      partners are more interested in.</p>
    <div class="flex flex-wrap -mx-3">
      <div class="lg:my-2 my-4 p-3 lg:p-5 w-full md:1/2 lg:w-full xl:w-1/2">
        <span class="text-primary my-4 hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Web, Email & Banner Stats</span>
        <div class="bg-white px-4 lg:px-9 py-3 lg:py-6 rounded-[5px] h-[calc(100%-24px)]">
          <canvas id="webemailbanne-chart"></canvas>
        </div>
      </div>
      <div class="lg:my-2 my-4 p-3 lg:p-5 w-full md:w-1/2 lg:w-full xl:w-1/2">
        <span class="text-primary my-4 hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">App Stats</span>
        <div class="bg-white px-4 lg:px-9 py-3 lg:py-6 rounded-[5px] h-[calc(100%-24px)]">
          <canvas id="appstats-chart"></canvas>
        </div>
      </div>
      <div class="lg:my-2 my-4 p-3 lg:p-5 w-full md:w-1/2 lg:w-full xl:w-1/2">
        <span class="text-primary my-4 hidden sm:flex items-center font-semibold pl-5 relative before:w-[10px] before:h-[10px] before:bg-secondary before:inline-block before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full text-base">Social Stats</span>
        <div class="bg-white px-4 lg:px-9 py-3 lg:py-6 rounded-[5px] h-[calc(100%-24px)]">
          <canvas id="socialstats-chart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <script src="Jquery/jquery-3.6.0.min.js"></script>
  <script src="Jquery/chart.min.js"></script>
  <script>
    $(".burger-menu, .sidebar-bg").click(function() {
      $(".sidebar").toggleClass("-translate-x-[500px]");
      $(".sidebar-bg").toggleClass("hidden opacity-30");
    });

    $(".preview-btn, .back-btn").click(function() {
      $(".generator-right").toggleClass("hidden bg-[#EDF1F8] flex")
    });

    $('.profile-menu').click(function() {
      $(this).children('.profile-items').slideToggle();
    });
    $(document).click(function(e) {
      var target = e.target;
      if (!$(target).is('.profile-menu') && !$(target).parents().is('.profile-menu')) {
        $('.profile-items').slideUp();
      }
    });

    const ctx = document.getElementById('webemailbanne-chart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132)',
            'rgba(54, 162, 235)',
            'rgba(255, 206, 86)',
            'rgba(75, 192, 192)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)'
          ]
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    $(function() {
      const ctx = document.getElementById('appstats-chart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132)',
              'rgba(54, 162, 235)',
              'rgba(255, 206, 86)',
              'rgba(75, 192, 192)',
              'rgba(153, 102, 255)',
              'rgba(255, 159, 64)'
            ]
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });

    window.onload = function() {
      const ctx = document.getElementById('socialstats-chart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              '#FF6384',
              '#36A2EB',
              'rgba(255, 206, 86)',
              'rgba(75, 192, 192)',
              'rgba(153, 102, 255)',
              'rgba(255, 159, 64)'
            ],

          }]
        }
      });
    };
  </script>
  <script type="text/javascript">
    // Create the chart
    email = '<?php echo $personal_stat['email_count']; ?>';
    website = '<?php echo $personal_stat['website_count']; ?>';
    banner = '<?php echo $personal_stat['banner_count']; ?>';
    amazon = '<?php echo $personal_stat['amazon_count']; ?>';
    appstore = '<?php echo $personal_stat['appstore_count']; ?>';
    googleplay = '<?php echo $personal_stat['googleplaystore_count']; ?>';
    socil_stats = <?php echo json_encode($personal_socials); ?>;
    Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Web & email stats'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'
      },
      yAxis: {
        title: {
          text: 'Total click counts'
        }

      },
      legend: {
        enabled: false
      },
      plotOptions: {
        series: {
          borderWidth: 0,
          dataLabels: {
            enabled: true,
            format: '{point.y:1f}'
          }
        }
      },
      tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> of total<br/>'
      },
      series: [{
        name: 'Stat',
        colorByPoint: true,
        data: [{
          name: 'Email',
          y: parseInt(email),
          drilldown: 'Email'
        }, {
          name: 'Website',
          y: parseInt(website),
          drilldown: 'Website'
        }, {
          name: 'Banner',
          y: parseInt(banner),
          drilldown: 'Banner'
        }]
      }],
    });


    Highcharts.chart('container2', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Social Stats'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category',
        labels: {
          rotation: -45,
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Total click counts'
        }
      },
      legend: {
        enabled: false
      },
      tooltip: {
        pointFormat: 'Total: <b>{point.y:1f} clicks</b>'
      },
      series: [{
        name: 'Population',
        data: socil_stats,
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: '#FFFFFF',
          align: 'right',
          format: '{point.y:1f}', // one decimal
          y: 10, // 10 pixels down from the top
          style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
          }
        }
      }]
    });
    Highcharts.chart('container3', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
      },
      title: {
        text: 'App<br>stat',
        align: 'center',
        verticalAlign: 'middle',
        y: 40
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
        pie: {
          dataLabels: {
            enabled: true,
            distance: -50,
            style: {
              fontWeight: 'bold',
              color: 'white'
            }
          },
          startAngle: -90,
          endAngle: 90,
          center: ['50%', '75%']
        }
      },
      series: [{
        type: 'pie',
        name: 'App Stat',
        innerSize: '50%',
        data: [
          ['Amazon', parseInt(amazon)],
          ['Google Play', parseInt(googleplay)],
          ['Apps tore', parseInt(appstore)],
          {
            name: 'Proprietary or Undetectable',
            y: 0.2,
            dataLabels: {
              enabled: false
            }
          }
        ]
      }]
    });
  </script>
</body>

</html>