var inp = document.querySelector(".taskname");
var list = document.querySelector(".tasklist");
var taskList = [];

function render(elements) {
    list.innerHTML = "";
    elements.forEach( e => {
        var newEl = document.createElement('li');
        newEl.innerHTML = e;
        list.appendChild(newEl);
    });
}

inp.addEventListener("keyup", e => {
   if (e.which === 13 && inp.value !== ""){
        taskList.push(inp.value);
        inp.value = "";
        render(taskList);
   }
});










