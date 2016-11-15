/*Select all the paragraphs with the class attribute
Select all the paragraphs that contains at least a child
Select all the paragraphs with the id "paragraph1"
Select all the paragraphs containing "luigi"
Select all the paragraphs with the id beginning with "para"
Select all the paragraphs with the id beginning with "para" and with the align attribute containing center
Select all the visible ul
Select the li being the second element of an ul.
Select all the ul that contain a li with the class "a".
Select the li being the last element of an ul.*/

$("document").ready(function(){
  alert("Web page is loaded!!!");
  $("p[class]");
  $("p:parent");
  $("p[id='paragraph1']");
  $("p:contains('luigi')");
  $("p[id^='para']");
  $("p[id^='para'], p[align='center']");
  $("ul:visible");
  $("ul li:nth-child(2)");
  $("ul:has(li[clas='a'])");
  $("ul li:last-child");

})
