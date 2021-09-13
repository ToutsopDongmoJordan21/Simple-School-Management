var input = document.getElementById("input").value;
var addtask = document.getElementById("add");
var tasklist = document.getElementById("list");
function add(){
    var li = document.createElement("li");
    var item = document.createTextNode(input);
    var myli = li.appendChild(li);
    

    tasklist += tasklist.appendChild(myli);
   
};


