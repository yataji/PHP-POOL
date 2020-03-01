var stock = new Array();
var dftlst = document.getElementById("ft_list");
if (document.cookie)
    stock = document.cookie.split(',');
for (i in stock)
{
    var add = document.createElement("div");
    add.onclick = removeit;
    add.innerText = decodeURIComponent(stock[i]);
    dftlst.appendChild(add, dftlst.firstChild);
}
function ftToDo()
{
    var txt = prompt("Add a new:");
    if (txt)
    {
        var code = encodeURIComponent(txt);
        stock.unshift(code);
        var add = document.createElement("div");
        add.onclick = removeit;
        add.innerText = txt;
        
        dftlst.insertBefore(add, dftlst.firstChild);
        document.cookie = stock.toString();
    }
}
function removeit()
{
    var index = Array.prototype.indexOf.call(dftlst.children, this);
    if(confirm("Do you want to remove ??!!"))
    {
        this.parentNode.removeChild(this);
        stock.splice(index, 1);
        document.cookie = stock.toString();
    }
}