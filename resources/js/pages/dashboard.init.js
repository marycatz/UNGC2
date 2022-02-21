var element1 = document.getElementById('statesDisplay');
var element2 = document.getElementById('industryDisplay');



$('#companysize').on('select2:select', function (e) {
  // Do something
  var data = e.params.data;

  var data1companysize = $('#companysize').select2('data');
  var data1state = $('#state').select2('data');
  var data1industry = $('#industry').select2('data');
  
  var valuedata1companysize  = data1companysize[0].text;
  var valuedata1state = data1state[0].text;
  var valuedata1industry = data1industry[0].text;


  // alert(valuedata1companysize);
  // alert(valuedata1state);
  // alert(valuedata1industry);
  var a = document.getElementById("el");
  var b = document.getElementById("ea");
  var c = document.getElementById("ela");

  var d = document.getElementById("sol");
  var e = document.getElementById("soa");
  var f = document.getElementById("sola");


  var g = document.getElementById("gl");
  var h = document.getElementById("ga");
  var i = document.getElementById("gla");

  var j = document.getElementById("scl");
  var k = document.getElementById("sca");
  var l = document.getElementById("scla");

  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "5";
    b.innerHTML = "7";
    c.innerHTML = "4";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "4";
    j.innerHTML = "3";
    k.innerHTML = "11";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "7";
    c.innerHTML = "8";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "3";
    j.innerHTML = "3";
    k.innerHTML = "12";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "6";
    c.innerHTML = "8";
    d.innerHTML = "4";
    e.innerHTML = "4";
    f.innerHTML = "12";
    g.innerHTML = "12";
    h.innerHTML = "6";
    i.innerHTML = "3";
    j.innerHTML = "4";
    k.innerHTML = "22";
    l.innerHTML = "1";
  }

  //Aggribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "3";
    g.innerHTML = "5";
    h.innerHTML = "3";
    i.innerHTML = "3";
    j.innerHTML = "2";
    k.innerHTML = "5";
    l.innerHTML = "1";
  }
  //Johor
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "4";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "6";
    g.innerHTML = "6";
    h.innerHTML = "2";
    i.innerHTML = "2";
    j.innerHTML = "3";
    k.innerHTML = "4";
    l.innerHTML = "1";
  }
  
  //Johor Agribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "3";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "1";
    f.innerHTML = "5";
    g.innerHTML = "5";
    h.innerHTML = "1";
    i.innerHTML = "1";
    j.innerHTML = "2";
    k.innerHTML = "3";
    l.innerHTML = "1";
  }
  
});

$('#state').on('select2:select', function (e) {
  // Do something
  var data = $('#state').select2('data');
  var valuedata = data[0].text;


  if(valuedata == "All States") {
    // element.style.display = 'none';
    element1.style.display = 'block';
  
  
  }
  if(valuedata != "All States"){
 
    element1.style.display = 'none';
  }

  var data1companysize = $('#companysize').select2('data');
  var data1state = $('#state').select2('data');
  var data1industry = $('#industry').select2('data');
  
  var valuedata1companysize  = data1companysize[0].text;
  var valuedata1state = data1state[0].text;
  var valuedata1industry = data1industry[0].text;


  // alert(valuedata1companysize);
  // alert(valuedata1state);
  // alert(valuedata1industry);
  var a = document.getElementById("el");
  var b = document.getElementById("ea");
  var c = document.getElementById("ela");

  var d = document.getElementById("sol");
  var e = document.getElementById("soa");
  var f = document.getElementById("sola");


  var g = document.getElementById("gl");
  var h = document.getElementById("ga");
  var i = document.getElementById("gla");

  var j = document.getElementById("scl");
  var k = document.getElementById("sca");
  var l = document.getElementById("scla");

  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "5";
    b.innerHTML = "7";
    c.innerHTML = "4";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "4";
    j.innerHTML = "3";
    k.innerHTML = "11";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "7";
    c.innerHTML = "8";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "3";
    j.innerHTML = "3";
    k.innerHTML = "12";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "6";
    c.innerHTML = "8";
    d.innerHTML = "4";
    e.innerHTML = "4";
    f.innerHTML = "12";
    g.innerHTML = "12";
    h.innerHTML = "6";
    i.innerHTML = "3";
    j.innerHTML = "4";
    k.innerHTML = "22";
    l.innerHTML = "1";
  }

  //Aggribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "3";
    g.innerHTML = "5";
    h.innerHTML = "3";
    i.innerHTML = "3";
    j.innerHTML = "2";
    k.innerHTML = "5";
    l.innerHTML = "1";
  }
  //Johor
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "4";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "6";
    g.innerHTML = "6";
    h.innerHTML = "2";
    i.innerHTML = "2";
    j.innerHTML = "3";
    k.innerHTML = "4";
    l.innerHTML = "1";
  }
  
  //Johor Agribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "3";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "1";
    f.innerHTML = "5";
    g.innerHTML = "5";
    h.innerHTML = "1";
    i.innerHTML = "1";
    j.innerHTML = "2";
    k.innerHTML = "3";
    l.innerHTML = "1";
  }

});

$('#industry').on('select2:select', function (e) {
  // Do something
  var data = $('#industry').select2('data');
  var valuedata = data[0].text;


  if(valuedata == "All Industry") {
    // element.style.display = 'none';
    element2.style.display = 'block';

  
  }
  if(valuedata != "All Industry"){
 
    element2.style.display = 'none';
    // element1.style.display = 'none';
    // var chart = new ApexCharts(document.querySelector("#smestatessingle"), options);
    // chart.render();
  }

  var data1companysize = $('#companysize').select2('data');
  var data1state = $('#state').select2('data');
  var data1industry = $('#industry').select2('data');
  
  var valuedata1companysize  = data1companysize[0].text;
  var valuedata1state = data1state[0].text;
  var valuedata1industry = data1industry[0].text;


  // alert(valuedata1companysize);
  // alert(valuedata1state);
  // alert(valuedata1industry);
  var a = document.getElementById("el");
  var b = document.getElementById("ea");
  var c = document.getElementById("ela");

  var d = document.getElementById("sol");
  var e = document.getElementById("soa");
  var f = document.getElementById("sola");


  var g = document.getElementById("gl");
  var h = document.getElementById("ga");
  var i = document.getElementById("gla");

  var j = document.getElementById("scl");
  var k = document.getElementById("sca");
  var l = document.getElementById("scla");

  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "5";
    b.innerHTML = "7";
    c.innerHTML = "4";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "4";
    j.innerHTML = "3";
    k.innerHTML = "11";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "7";
    c.innerHTML = "8";
    d.innerHTML = "3";
    e.innerHTML = "8";
    f.innerHTML = "4";
    g.innerHTML = "9";
    h.innerHTML = "7";
    i.innerHTML = "3";
    j.innerHTML = "3";
    k.innerHTML = "12";
    l.innerHTML = "2";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "6";
    c.innerHTML = "8";
    d.innerHTML = "4";
    e.innerHTML = "4";
    f.innerHTML = "12";
    g.innerHTML = "12";
    h.innerHTML = "6";
    i.innerHTML = "3";
    j.innerHTML = "4";
    k.innerHTML = "22";
    l.innerHTML = "1";
  }

  //Aggribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "All States" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "3";
    g.innerHTML = "5";
    h.innerHTML = "3";
    i.innerHTML = "3";
    j.innerHTML = "2";
    k.innerHTML = "5";
    l.innerHTML = "1";
  }
  //Johor
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "4";
    b.innerHTML = "5";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "6";
    f.innerHTML = "3";
    g.innerHTML = "8";
    h.innerHTML = "4";
    i.innerHTML = "2";
    j.innerHTML = "2";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "All Industry")
  {
    a.innerHTML = "1";
    b.innerHTML = "4";
    c.innerHTML = "3";
    d.innerHTML = "2";
    e.innerHTML = "3";
    f.innerHTML = "6";
    g.innerHTML = "6";
    h.innerHTML = "2";
    i.innerHTML = "2";
    j.innerHTML = "3";
    k.innerHTML = "4";
    l.innerHTML = "1";
  }
  
  //Johor Agribusiness
  if(valuedata1companysize == "Turnover RM < 300,000 or < 5 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "1";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "2";
    f.innerHTML = "1";
    g.innerHTML = "7";
    h.innerHTML = "2";
    i.innerHTML = "1";
    j.innerHTML = "1";
    k.innerHTML = "2";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 300,000 - 15Mil, or 5 - 75 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "2";
    b.innerHTML = "4";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "5";
    f.innerHTML = "2";
    g.innerHTML = "4";
    h.innerHTML = "5";
    i.innerHTML = "2";
    j.innerHTML = "1";
    k.innerHTML = "7";
    l.innerHTML = "1";
  }

  if(valuedata1companysize == "Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees" && valuedata1state == "Johor" && valuedata1industry == "Agribusiness")
  {
    a.innerHTML = "1";
    b.innerHTML = "3";
    c.innerHTML = "2";
    d.innerHTML = "1";
    e.innerHTML = "1";
    f.innerHTML = "5";
    g.innerHTML = "5";
    h.innerHTML = "1";
    i.innerHTML = "1";
    j.innerHTML = "2";
    k.innerHTML = "3";
    l.innerHTML = "1";
  }

});

$("#DeleteUser").click(function () {

  var id = $(this).data('userid');

  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: !0,
    confirmButtonColor: "#34c38f",
    cancelButtonColor: "#f46a6a",
    confirmButtonText: "Yes, delete it!"
  }).then(function (t) {
    t.preventDefault();


    $.ajax(
      {
      url: '/delete_linked_user_corp/'+id,
      type: 'DELETE',
      data: {
              id: id
      },
      success: function (response){
      
          Swal.fire(
          'Remind!',
          'User deleted successfully!',
          'success'
          )
          // get_company_data()
      }
  
  });
  });
}),
$(".select2").select2();
options = {
  chart: {
    height: 350,
    type: "bar",
    toolbar: {
      show: !1
    }
  },
  plotOptions: {
    bar: {
      vertical: !0
    }
  },
  dataLabels: {
    enabled: !1
  },
  series: [{
    data: [20, 10, 5]
  }],
  colors: ["#0000FF"],
  grid: {
    borderColor: "#f1f1f1"
  },
  xaxis: {
    categories: ["Turnover RM < 300,000 or < 5 employees", "Turnover RM 300,000 < 15Mil, or 5 < 75 employees", "Turnover RM 15 Mil - 50 Mil, or 75 - 299 employees"]
  }
};
(chart = new ApexCharts(document.querySelector("#bar_chart"), options)).render();
options = {
  chart: {
    height: 350,
    type: "bar",
    toolbar: {
      show: !1
    }
  },
  plotOptions: {
    bar: {
      vertical: !0
    }
  },
  dataLabels: {
    enabled: !1
  },
  series: [{
    data: [80, 100, 40,22,20,18,16,88,19,3]
  }],
  colors: ["#0000FF"],
  grid: {
    borderColor: "#f1f1f1"
  },
  xaxis: {
    categories: ["Agribusiness","Construction","Consultancy","Energy","Food","Health","Hospitality","Manufacturing","Media & ICT","Transport & Logistics"]
  }
};
(chart = new ApexCharts(document.querySelector("#bar_chart1"), options)).render();

  options = {
    chart: {
      height: 350,
      type: "bar",
      toolbar: {
        show: !1
      }
    },
    plotOptions: {
      bar: {
        vertical: !0
      }
    },
    dataLabels: {
      enabled: !1
    },
    series: [{
      data: [20, 10, 5]
    }],
    colors: ["#0000FF"],
    grid: {
      borderColor: "#f1f1f1"
    },
    xaxis: {
      categories: ["Turnover RM < 300,000 or < 5 employees", "Turnover RM 300,000 < 15Mil, or 5 < 75 employees", "Turnover RM 15 Mil - 50 Mil, or 75 - 299 employees"]
    }
  };
  (chart = new ApexCharts(document.querySelector("#bar_chart"), options)).render();
  options = {
    chart: {
      height: 350,
      type: "bar",
      toolbar: {
        show: !1
      }
    },
    plotOptions: {
      bar: {
        vertical: !0
      }
    },
    dataLabels: {
      enabled: !1
    },
    series: [{
      data: [80, 100, 40,22,20,18,16,88,19,3]
    }],
    colors: ["#0000FF"],
    grid: {
      borderColor: "#f1f1f1"
    },
    xaxis: {
      categories: ["Agribusiness","Construction","Consultancy","Energy","Food","Health","Hospitality","Manufacturing","Media & ICT","Transport & Logistics"]
    }
  };
  (chart = new ApexCharts(document.querySelector("#bar_chart1"), options)).render();
  options = {
    series: [
    {
      data: [
        
        // {
        //   x: 'Johor',
        //   y: 70
        // },
      
      ]
    }
  ],
    legend: {
    show: false
  },
  chart: {
    height: 350,
    type: 'treemap'
  },
 
  colors: [
    '#FFA500',
 
  ],
  plotOptions: {
    treemap: {
      distributed: true,
      enableShades: false
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#smestatessingle"), options);
  chart.render();
  
  //single
  options = {
    series: [
    {
      data: [
        {
          x: 'WP Kuala Lumpur',
          y: 150
        },
        {
          x: 'Malacca',
          y: 50
        },
        {
          x: 'Kelantan',
          y: 184
        },
        {
          x: 'Sabah',
          y: 55
        },
        {
          x: 'Terengganu',
          y: 84
        },
        {
          x: 'Perak',
          y: 31
        },
        {
          x: 'Johor',
          y: 70
        },
        {
          x: 'Perlis',
          y: 30
        },
        {
          x: 'Sarawak',
          y: 44
        },
        {
          x: 'Selangor',
          y: 68
        },
        {
          x: 'Pahang',
          y: 19
        },
        {
          x: 'Penang',
          y: 29
        },
        {
            x: 'Kedah',
            y: 29
        },
        {
            x: 'WP putrajaya',
            y: 29
        },
        {
            x: 'Negeri Sembilan',
            y: 29
        },
        {
            x: 'WP Labuan',
            y: 29
        },
      ]
    }
  ],
    legend: {
    show: false
  },
  chart: {
    height: 350,
    type: 'treemap'
  },
 
  colors: [
    '#FFA500',
    '#F7B844',
    '#ADD8C7',
    '#EC3C65',
    '#CDD7B6',
    '#C1F666',
    '#D43F97',
    '#1E5D8C',
    '#421243',
    '#7F94B0',
    '#EF6537',
    '#C0ADDB'
  ],
  plotOptions: {
    treemap: {
      distributed: true,
      enableShades: false
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#smestates"), options);
  chart.render();

  options = {
    series: [
    {
      data: [
        {
          x: 'Accounts Manager',
          y: 150
        },
        {
          x: 'CEO',
          y: 50
        },
        {
          x: 'Engineering Manager',
          y: 184
        },
        {
          x: 'HR Manager',
          y: 55
        },
        {
          x: 'Architect',
          y: 84
        },
        {
          x: 'Chief Of Sustainability section',
          y: 31
        },
        {
          x: 'General Manager',
          y: 70
        },
        {
          x: 'Legal counsel',
          y: 30
        },
        {
          x: 'Assistant',
          y: 44
        },
        {
          x: 'Commercial Director',
          y: 68
        },
        {
          x: 'Groups Account Manager',
          y: 19
        },
        {
          x: 'Manager',
          y: 29
        },
        {
            x: 'Bhs Book Printing Sdn Bhd',
            y: 29
        },
        {
            x: 'Director',
            y: 29
        },
        {
            x: 'Head Of Finance',
            y: 29
        },
        {
            x: 'Managing Director',
            y: 29
        },
        {
            x: 'Business Development Manager',
            y: 29
        },
        {
            x: 'Editor in Chief',
            y: 29
        },
        {
            x: 'Head Of Sustainability',
            y: 29
        },
        {
            x: 'Owner of the company',
            y: 29
        },
      ]
    }
  ],
    legend: {
    show: false
  },
  chart: {
    height: 350,
    type: 'treemap'
  },
 
  colors: [
    '#FFA500',
    '#F7B844',
    '#ADD8C7',
    '#EC3C65',
    '#CDD7B6',
    '#C1F666',
    '#D43F97',
    '#1E5D8C',
    '#421243',
    '#7F94B0',
    '#EF6537',
    '#C0ADDB'
  ],
  plotOptions: {
    treemap: {
      distributed: true,
      enableShades: false
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#jobtitles"), options);
  chart.render();
 var options = {
          series: [{
          name: 'Series 1',
          data: [20, 100, 40, 30, 50, 80, 33],
        }],
          chart: {
          height: 350,
          type: 'radar',
        },
        dataLabels: {
          enabled: true
        },
        plotOptions: {
          radar: {
            size: 140,
            polygons: {
              strokeColors: '#e9e9e9',
              fill: {
                colors: ['#f8f8f8', '#fff']
              }
            }
          }
        },
        title: {
          text: 'Radar with Polygon Fill'
        },
        colors: ['#FF4560'],
        markers: {
          size: 4,
          colors: ['#fff'],
          strokeColor: '#FF4560',
          strokeWidth: 2,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val
            }
          }
        },
        xaxis: {
          categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
        },
        yaxis: {
          tickAmount: 7,
          labels: {
            formatter: function(val, i) {
              if (i % 2 === 0) {
                return val
              } else {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
       var options = {
          series: [{
          name: 'Series 1',
          data: [20, 100, 40, 30, 50, 80, 33],
        }],
          chart: {
          height: 350,
          type: 'radar',
        },
        dataLabels: {
          enabled: true
        },
        plotOptions: {
          radar: {
            size: 140,
            polygons: {
              strokeColors: '#e9e9e9',
              fill: {
                colors: ['#f8f8f8', '#fff']
              }
            }
          }
        },
        title: {
          text: 'Radar with Polygon Fill'
        },
        colors: ['#FF4560'],
        markers: {
          size: 4,
          colors: ['#fff'],
          strokeColor: '#FF4560',
          strokeWidth: 2,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val
            }
          }
        },
        xaxis: {
          categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
        },
        yaxis: {
          tickAmount: 7,
          labels: {
            formatter: function(val, i) {
              if (i % 2 === 0) {
                return val
              } else {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
        var options = {
            series: [{
            name: 'Series 2',
            data: [40, 40, 40],
          }],
            chart: {
            height: 350,
            type: 'radar',
          },
          title: {
            text: ''
          },
          xaxis: {
            categories: ['Dimension', 'Social Dimension', 'Governance']
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#dimensionscore"), options);
          chart.render();

          var options = {
            series: [{
            name: 'Series 1',
            data: [40, 40, 40,20,10],
          }],
            chart: {
            height: 350,
            type: 'radar',
          },
          title: {
            text: ''
          },
          xaxis: {
            categories: ['Operations', 'Skateholders', 'Human Capital','Governance','Strategy']
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#subcategoryscore"), options);
          chart.render();

          var options = {
            series: [{
            name: 'Series 1',
            data: [40, 40, 40,20,10,20,10,15],
          }],
            chart: {
            height: 350,
            type: 'radar',
          },
          title: {
            text: ''
          },
          xaxis: {
            categories: ['Water Cosumption', 'Environmental Management', 'Carbon Footprint','EcosystemApproach','Inclusives','Wages','Anti Corruption Policies','Climate Action']
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#indicatorscore"), options);
          chart.render();




          



          



  