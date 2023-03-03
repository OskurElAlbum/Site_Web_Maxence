

// Create an MQTT client
var host = "192.168.1.2"
var client = new Paho.MQTT.Client(host, 9001, 'my-client-id');

// When the client is connected
client.onConnectionLost = function (responseObject) {
    console.log('Connection lost: ' + responseObject.errorMessage);
  };
  client.onMessageArrived = function (message) {
    console.log('Message arrived: ' + message.payloadString);
  
    // Parse message as JSON
    var data = JSON.parse(message.payloadString);
  
    // Update chart data
    chart.data.labels.push(data.time); // add new label for x-axis
    chart.data.datasets[0].data.push(data.temperature); // add new data point to the series
  /*format d'écriture{
    "time": "0",
    "temperature": 25
    }*/

    // Update chart
    chart.update();
  };
  client.connect({
    onSuccess: function () {
      console.log('Connected to MQTT server');
  
      // Subscribe to the "temperature" topic after connecting to the MQTT server
      client.subscribe('Meteo');
    }
  });
  
  // Create Chart.js chart
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
  
    // The data for our dataset
    data: {
      labels: [], // leave this array empty for now
      datasets: [{
        label: 'Température (en °C)',
        backgroundColor: 'rgb(255, 50, 0)',
        borderColor: 'rgb(250, 50, 0)',
        data: [] ,// leave this array empty for now
        fill :false,
      }]
    },
  
    // Configuration options go here
    options: {scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  
  
  
  