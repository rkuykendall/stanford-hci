<?php include ('bits/header.php'); ?>

        <section id="encouragement">
          Fridays are your best days, make it three in a row!
        </section>

        <section>
          <h1>Total Good Days</h1>

          <div class="graph" id="area"></div>
          
          <script>
            Morris.Area({
              element: 'area',
              data: [
                {day: '1', sum: 0},
                {day: '2', sum: 1},
                {day: '3', sum: 1},
                {day: '4', sum: 1},
                {day: '5', sum: 1},
                {day: '6', sum: 1},
                {day: '7', sum: 2},
                {day: '8', sum: 2},
                {day: '9', sum: 3},
                {day: '10', sum: 4},
                {day: '11', sum: 4},
                {day: '12', sum: 5},
                {day: '13', sum: 6},
                {day: '14', sum: 6},
                {day: '15', sum: 6},
                {day: '16', sum: 7},
                {day: '17', sum: 7},
                {day: '18', sum: 8},
                {day: '19', sum: 8},
                {day: '20', sum: 8},
                {day: '21', sum: 9},
                {day: '22', sum: 10},
                {day: '23', sum: 11},
                {day: '24', sum: 11},
                {day: '25', sum: 11},
                {day: '26', sum: 11},
                {day: '27', sum: 11},
                {day: '28', sum: 12},
                {day: '29', sum: 12},
                {day: '30', sum: 12}
              ],
              xkey: 'day',
              ykeys: ['sum'],
              labels: ['Day: ']
            });
          </script>
          
        </section>

        <section>
          <h1>Seven Day Sums</h1>

          <div class="graph" id="line"></div>
          
          <script>
            Morris.Line({
              element: 'line',
              data: [
                {day: '1', sum: 0},
                {day: '2', sum: 1},
                {day: '3', sum: 1},
                {day: '4', sum: 1},
                {day: '5', sum: 1},
                {day: '6', sum: 1},
                {day: '7', sum: 2},
                {day: '8', sum: 2},
                {day: '9', sum: 2},
                {day: '10', sum: 3},
                {day: '11', sum: 3},
                {day: '12', sum: 4},
                {day: '13', sum: 5},
                {day: '14', sum: 4},
                {day: '15', sum: 4},
                {day: '16', sum: 4},
                {day: '17', sum: 3},
                {day: '18', sum: 4},
                {day: '19', sum: 3},
                {day: '20', sum: 2},
                {day: '21', sum: 3},
                {day: '22', sum: 4},
                {day: '23', sum: 4},
                {day: '24', sum: 4},
                {day: '25', sum: 3},
                {day: '26', sum: 3},
                {day: '27', sum: 3},
                {day: '28', sum: 3},
                {day: '29', sum: 2},
                {day: '30', sum: 1}
              ],
              xkey: 'day',
              ykeys: ['sum'],
              labels: ['Seven day sum: ']
            });
          </script>
          
        </section>
        
        <section>
          <h1>Last 7 Days</h1>

          <div class="graph" id="pie"></div>
          
          <script>
            Morris.Donut({
              element: 'pie',
              data: [
                {label: "Good Days", value: 1},
                {label: "Bad Days", value: 6}
              ]
            });
          </script>
          
        </section>
        
        


<?php include ('bits/footer.php') ?>en day sum: ']
            });
          </script>
          
        </section>
        
        <section>
          <h1>Last 7 Days</h1>

          <div class="graph" id="pie"></div>
          
          <script>
            Morris.Donut({
              element: 'pie',
              data: [
                {label: "Good Days", value: 1},
                {label: "Bad Days", value: 6}
              ]
            });
          </script>
          
        </section>
        
        


<?php include ('bits/footer.php') ?>