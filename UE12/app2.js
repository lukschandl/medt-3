$('.delete').click(function(){
console.log("deleted");

if(confirm("Wollen sie das Projekt wirklich Löschen?"))
{
	console.log("true: " + this.id); //this ist der <a> Element das auf click gebunden ist
}
else{
	console.log("false" + $(this).attr("id"));
}
});
$('.change').click(function(){
console.log("changed");
});