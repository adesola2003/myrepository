function greet(){


    var visitor = document.getElementById('visitor_name').value;
    var title = document.getElementById('visitor_title').value;
    
    //alert("welcome " + title + " " + visitor);
    document.write("<h1>Welcome " + title + " " + visitor + "</h1>")
    }