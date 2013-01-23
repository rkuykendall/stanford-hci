<?php include ('bits/header.php'); ?>

        <section id="encouragement">
          Fridays are your best days, make it three in a row!
        </section>

        <section>
          <h1>You've met your daily goal 12 days!</h1>

          <div class="graph" id="area"></div>
          
          <script>
            Morris.Area({
              element: 'area',
              data: [
                {day: '2012-11-01', sum: 0},
                {day: '2012-11-02', sum: 1},
                {day: '2012-11-03', sum: 1},
                {day: '2012-11-04', sum: 1},
                {day: '2012-11-05', sum: 1},
                {day: '2012-11-06', sum: 1},
                {day: '2012-11-07', sum: 2},
                {day: '2012-11-08', sum: 2},
                {day: '2012-11-09', sum: 3},
                {day: '2012-11-10', sum: 4},
                {day: '2012-11-11', sum: 4},
                {day: '2012-11-12', sum: 5},
                {day: '2012-11-13', sum: 6},
                {day: '2012-11-14', sum: 6},
                {day: '2012-11-15', sum: 6},
                {day: '2012-11-16', sum: 7},
                {day: '2012-11-17', sum: 7},
                {day: '2012-11-18', sum: 8},
                {day: '2012-11-19', sum: 8},
                {day: '2012-11-20', sum: 8},
                {day: '2012-11-21', sum: 9},
                {day: '2012-11-22', sum: 10},
                {day: '2012-11-23', sum: 11},
                {day: '2012-11-24', sum: 11},
                {day: '2012-11-25', sum: 11},
                {day: '2012-11-26', sum: 11},
                {day: '2012-11-27', sum: 11},
                {day: '2012-11-28', sum: 12},
                {day: '2012-11-29', sum: 12},
                {day: '2012-11-30', sum: 12}
              ],
              xkey: 'day',
              ykeys: ['sum'],
              labels: ['Days'],
              xlabels: 'day'
            });
          </script>
          
        </section>

        <section>
          <h1>In the last seven days, you've met your daily goal once.</h1>

          <div class="graph" id="pie"></div>
          
          <script>
            Morris.Donut({
              element: 'pie',
              data: [
                {label: "Goal met!", value: 1},
                {label: "Goal not met.", value: 6}
              ]
            });
          </script>
          
        </section>

        <section>
          <h1>Your 7-Day-Totals for the last 30 days look like this:</h1>

          <div class="graph" id="line"></div>
          
          <script>
            Morris.Line({
              element: 'line',
              data: [
                {day: '2012-11-01', sum: 0},
                {day: '2012-11-02', sum: 1},
                {day: '2012-11-03', sum: 1},
                {day: '2012-11-04', sum: 1},
                {day: '2012-11-05', sum: 1},
                {day: '2012-11-06', sum: 1},
                {day: '2012-11-07', sum: 2},
                {day: '2012-11-08', sum: 2},
                {day: '2012-11-09', sum: 2},
                {day: '2012-11-10', sum: 3},
                {day: '2012-11-11', sum: 3},
                {day: '2012-11-12', sum: 4},
                {day: '2012-11-13', sum: 5},
                {day: '2012-11-14', sum: 4},
                {day: '2012-11-15', sum: 4},
                {day: '2012-11-16', sum: 4},
                {day: '2012-11-17', sum: 3},
                {day: '2012-11-18', sum: 4},
                {day: '2012-11-19', sum: 3},
                {day: '2012-11-20', sum: 2},
                {day: '2012-11-21', sum: 3},
                {day: '2012-11-22', sum: 4},
                {day: '2012-11-23', sum: 4},
                {day: '2012-11-24', sum: 4},
                {day: '2012-11-25', sum: 3},
                {day: '2012-11-26', sum: 3},
                {day: '2012-11-27', sum: 3},
                {day: '2012-11-28', sum: 3},
                {day: '2012-11-29', sum: 2},
                {day: '2012-11-30', sum: 1}
              ],
              xkey: 'day',
              ykeys: ['sum'],
              labels: ['Seven day sum']
            });
          </script>
          
        </section>
        
        
        


<?php include ('bits/footer.php') ?>