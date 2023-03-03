

// Create an MQTT client
var host = "192.168.1.2"
var client = new Paho.MQTT.Client(host, 9001, 'my-client-id');

var Luminositectx = new Chart(document.getElementById('LuminositerChart').getContext('2d'));
var Temperaturectx = new Chart(document.getElementById('TemperatureChart').getContext('2d'));
var Humiditectx = new Chart(document.getElementById('HumiditeChart').getContext('2d'));
var Pressionctx = new Chart(document.getElementById('PressionChart').getContext('2d'));

  // Create Chart.js chart
 
  var LuminositeChart = new Chart(Luminositectx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
      labels: [], // leave this array empty for now
      datasets: [{
        label: 'Luminosite (en Lux)',
        backgroundColor: 'rgb(255, 215, 24)',
        borderColor: 'rgb(255, 185, 25)',
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
  
  var TemperatureChart = new Chart(Temperaturectx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
      labels: [], // leave this array empty for now
      datasets: [{
        label: 'Température (en °C)',
        backgroundColor: 'rgb(228, 19, 27)',
        borderColor: 'rgb(255, 21, 21)',
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
  
  var HumiditeChart = new Chart(Humiditectx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
      labels: [], // leave this array empty for now
      datasets: [{
        label: 'Humidite (en %)',
        backgroundColor: 'rgb(32, 143, 255)',
        borderColor: 'rgb(32, 173, 255)',
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

  var PressionChart = new Chart(Pressionctx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
      labels: [], // leave this array empty for now
      datasets: [{
        label: 'Pression (en Pa)',
        backgroundColor: 'rgb(175, 190, 255)',
        borderColor: 'rgb(148, 170, 215)',
        data: [] ,// leave this array empty for now
        fill :false,
        pointStyle: 'rectRot',
        pointRadius: 7,
        pointHoverRadius: 15
      }],
    },
    // Configuration options go here
    options: {
      responsive: true,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
    }
  });

  // When the client is connected
client.onConnectionLost = function (responseObject) {
  console.log('Connection lost: ' + responseObject.errorMessage);
};
client.onMessageArrived = function (message) {
  console.log('Message arrived: ' + message.payloadString);

  // Parse message as JSON
  var data = JSON.parse(message.payloadString);

  // Update chart data
  LuminositeChart.data.labels.push(data.time); // add new label for x-axis
  LuminositeChart.data.datasets[0].data.push(data.temperature); // add new data point to the series
  LuminositeChart.update();

  TemperatureChart.data.labels.push(data.time); // add new label for x-axis
  TemperatureChart.data.datasets[0].data.push(data.Luminosite); // add new data point to the series
  TemperatureChart.update();

  HumiditeChart.data.labels.push(data.time); // add new label for x-axis
  HumiditeChart.data.datasets[0].data.push(data.Humidite); // add new data point to the series
  HumiditeChart.update();

  PressionChart.data.labels.push(data.time); // add new label for x-axis
  PressionChart.data.datasets[0].data.push(data.Pression); // add new data point to the series
  PressionChart.update();
/*format d'écriture{
  "time": "0",
  "temperature": 25
  }*/

  // Update chart
};
client.connect({
  onSuccess: function () {
    console.log('Connected to MQTT server');

    // Subscribe to the "temperature" topic after connecting to the MQTT server
    client.subscribe('Meteo');
  }
});