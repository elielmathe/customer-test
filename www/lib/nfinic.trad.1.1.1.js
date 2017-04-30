/**
 * 
 * @author Mathe Eliel
 * @copyright nfinic 2017
 * @description This script allow us to translate a page
 * using tags wd
 * eg <wd txt="my_text"></wd>
 * We can get data from a JSON file:
 * 	var keyWords = {
 * 		"en":{
 * 				"my_text":"Hello world"
 * 			},
 * 		"fr":{
 * 				"my_text":"Bonjour le monde"
 * 		},
 * 		"sw":{
 * 				"my_text":"Jambo kwa wote"
 * 		}
 * }
 * 
 * Now, we call this method in javascript to get the appropriate language:
 * 		 
 * 				traduire(keyWords,"fr")
 * 
 */

function traduire(zone,kw,langue){
	var elts = document.getElementById(zone).getElementsByTagName("wd");
	//for(elt in elts) elt.innerText = kw[langue][elt.getAttribute("txt")];
	for(var i=0;i<elts.length;i++) elts[i].innerText = kw[langue][elts[i].getAttribute("txt")];
}

function traduireAttrib(zone,kw,langue,attribut){
	var elts = document.getElementById(zone).getElementsByClassName("wd");
	for(var i=0;i<elts.length;i++) elts[i].setAttribute(attribut,kw[langue][elts[i].getAttribute("txt")]);
}
