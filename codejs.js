function fnct0()
{
    var table_produit=new Array;
    localStorage.setItem("table_produit",table_produit);
    localStorage.setItem("ligne",0);
    window.location.href="entre.php";
    window.location.href="entre2.php";
    window.location.href="entre3.php";
    window.location.href="produit.html";

}
function fnct(val) {
    var nom=val;
    localStorage.setItem("myName",nom);
    window.location.href="entre.php";
    window.location.href="entre2.php";
    window.location.href="entre3.php";
    window.location.href="produit.html";
}
function fnct2() {
    var b=localStorage.getItem("myName");
    document.getElementById("demo").innerHTML=b;
}
function fnct3(val1,val2,val3,val4) {
    alert(val1+val2+val3+val4);
    var name=val1;
    var family_name=val2;
    var email=val3;
    var password=val4;
    localStorage.setItem("myname",name);
    localStorage.setItem("myfamily_name",family_name);
    localStorage.setItem("myemail",email);
    localStorage.setItem("mypassword",password);
    window.location.href="profile.php";
    window.location.href="buy.html";    
}
function fnct4() {
    var name=localStorage.getItem("myname");
    var family_name=localStorage.getItem("myfamily_name");
    var email=localStorage.getItem("myemail");
    var password=localStorage.getItem("mypassword");
    document.getElementById("demo1").innerHTML=name;
    document.getElementById("demo2").innerHTML=family_name;
    document.getElementById("demo3").innerHTML=email;
    document.getElementById("demo4").innerHTML=password;
}
function fnct5(val1,val2,val3,val4)
{
    var image=val1;
    var produit=val2;
    var prix=val3;
    var etoile=val4;
    localStorage.setItem("image",image);
    localStorage.setItem("produit",produit);
    localStorage.setItem("prix",prix);
    localStorage.setItem("etoile",etoile);
    window.location.href="produit.html";
}
function fnct6() {
    var image=localStorage.getItem("image");
    var produit=localStorage.getItem("produit");
    var prix=localStorage.getItem("prix");
    var etoile=localStorage.getItem("etoile");
    document.images["produit"].src=image;
    document.getElementById("demo2").innerHTML=produit;
    document.getElementById("demo3").innerHTML=prix;
}
function fnct7()
{
    var etoile=localStorage.getItem("etoile");
    for(var i=0;i<etoile;i++)
    {
        document.getElementById('et['+i+']').className="fa fa-star";
    }
    for(var i=etoile;i<5;i++)
    {
        document.getElementById('et['+i+']').className="fa fa-star-o";
    }
}




function fnct8()
{
    
    var quantite=f.elements["quantite"].value;
    alert('added to your profile tou bought now + '+quantite);
    localStorage.setItem("myquantite",quantite);
    var image=localStorage.getItem("image");
    var produit=localStorage.getItem("produit");
    var prix=localStorage.getItem("prix");
    var etoile=localStorage.getItem("etoile");
    var ligne=localStorage.getItem("ligne");
    var stable_produit=localStorage.getItem("table_produit");
    var tab=stable_produit.split(",");
    if(tab==0)
    {
        //alert('tab est null 0');
        var table_produit=new Array();
        ligne_produit=new Array;
        ligne_produit[0]=image;
        ligne_produit[1]=produit;
        ligne_produit[2]=prix;
        ligne_produit[3]=quantite;
        table_produit[table_produit.length]=ligne_produit;
        localStorage.setItem("table_produit",table_produit);
        localStorage.setItem("ligne",table_produit.length);
        window.location.href="profile.php";
        window.location.href="produit.html";
        window.location.href="buy.html";

        //alert("--------"+ligne_produit+" "+table_produit);

    }
    else
    {
        ligne++;
        var table_produit=new Array(ligne); 
        var c=0;
        //alert(tab);
        for(var i=0;i<ligne-1;i++)
        {
            table_produit[i]=new Array(4);
            for(var j=0;j<4;j++)
            {
               // alert(tab[c]);
                table_produit[i][j]=tab[c];
                c++;
            }
        }
        
        ligne_produit=new Array(4);
        ligne_produit[0]=image;
        ligne_produit[1]=produit;
        ligne_produit[2]=prix;
        ligne_produit[3]=quantite;
        //alert("ligne prod "+ligne_produit);
        table_produit[ligne-1]=ligne_produit;
        //alert("table prod "+table_produit);
        localStorage.setItem("table_produit",table_produit);
        localStorage.setItem("ligne",table_produit.length);
        window.location.href="profile.php";
        window.location.href="produit.html";
        window.location.href="buy.html";
    }
  
}




function fnct9()
{

    var quantite=localStorage.getItem("myquantite");
    var image=localStorage.getItem("image");
    var produit=localStorage.getItem("produit");
    var prix=localStorage.getItem("prix");
    var etoile=localStorage.getItem("etoile");

       var list=document.getElementById("mydiv");

        var newdiv1=document.createElement("div");
        newdiv1.setAttribute("class","product");

        var newimage=document.createElement("img");
        newimage.setAttribute("src",image);
        newimage.setAttribute("class","product");
        
        newdiv1.appendChild(newimage);

        var newdiv2=document.createElement("div");
        newdiv2.setAttribute("class","container");
        
        var newh2=document.createElement("h2");
        newh2.setAttribute("class","libelle");
        var texth2=document.createTextNode(produit);
        
        newh2.appendChild(texth2);
        newdiv2.appendChild(newh2);


        var newp1=document.createElement("p");
        newp1.setAttribute("class","title_libelle");
        var textp1=document.createTextNode("-------------------------");
        
        newp1.appendChild(textp1);
        newdiv2.appendChild(newp1);


        var newp2=document.createElement("p");
        newp2.setAttribute("class","title_libelle");
        var textp2=document.createTextNode(prix);
        
        newp2.appendChild(textp2);
        newdiv2.appendChild(newp2);

        var newp3=document.createElement("p");
        newp3.setAttribute("class","title_libelle");
        var textp3=document.createTextNode("quantite "+quantite);
        
        newp3.appendChild(textp3);
        newdiv2.appendChild(newp3);

        newdiv1.appendChild(newdiv2);

        list.appendChild(newdiv1);
}




function fnct10()
{
    var ligne=localStorage.getItem("ligne");
    var stable_produit=localStorage.getItem("table_produit");
   // alert(stable_produit+"==>"+ligne);
    var table_produit=new Array(ligne);
    for(var i=0;i<ligne;i++)
    {
        table_produit[i]=new Array(4);
    }
    var tab=stable_produit.split(",");
    var c=0;
    for(var i=0;i<ligne;i++)
    {
        for(var j=0;j<4;j++)
        {
            table_produit[i][j]=tab[c];
            c++;
        }
    }
    for(var i=0;i<ligne;i++)
    {
        var quantite=localStorage.getItem("myquantite");
    var image=localStorage.getItem("image");
    var produit=localStorage.getItem("produit");
    var prix=localStorage.getItem("prix");
    var etoile=localStorage.getItem("etoile");

       var list=document.getElementById("mydiv");

        var newdiv1=document.createElement("div");
        newdiv1.setAttribute("class","product");

        var newimage=document.createElement("img");
        newimage.setAttribute("src",table_produit[i][0]);
        newimage.setAttribute("class","product");
        
        newdiv1.appendChild(newimage);

        var newdiv2=document.createElement("div");
        newdiv2.setAttribute("class","container");
        
        var newh2=document.createElement("h2");
        newh2.setAttribute("class","libelle");
        var texth2=document.createTextNode(table_produit[i][1]);
        
        newh2.appendChild(texth2);
        newdiv2.appendChild(newh2);


        var newp1=document.createElement("p");
        newp1.setAttribute("class","title_libelle");
        var textp1=document.createTextNode("-------------------------");
        
        newp1.appendChild(textp1);
        newdiv2.appendChild(newp1);


        var newp2=document.createElement("p");
        newp2.setAttribute("class","title_libelle");
        var textp2=document.createTextNode(table_produit[i][2]);
        
        newp2.appendChild(textp2);
        newdiv2.appendChild(newp2);

        var newp3=document.createElement("p");
        newp3.setAttribute("class","title_libelle");
        var textp3=document.createTextNode("quantite "+table_produit[i][3]);
        
        newp3.appendChild(textp3);
        newdiv2.appendChild(newp3);

        newdiv1.appendChild(newdiv2);

        list.appendChild(newdiv1);
    }
}
function fnct12()
{
    var table_produit=new Array;
    localStorage.setItem("table_produit",table_produit);
    var ligne=table_produit.length;
    localStorage.setItem("ligne",ligne);
    alert('all your list will be deleted');
    window.location.href="entre.php";
    window.location.href="entre2.php";
    window.location.href="entre3.php";
    window.location.href="produit.html";
    window.location.href="profile.html";
}



function fnct13()
{
    var stable_produit=localStorage.getItem("table_produit");
    var tab=stable_produit.split(",");
    var somme=0;
    for(var p=2;p<tab.length;p+=4)
    {
        somme=somme+tab[p]*tab[p+1];
    }
    alert(somme);
    localStorage.setItem("somme",somme);
    window.location.href="buy.html";

}

function fnct14()
{
    var somme=localStorage.getItem("somme");
    document.getElementById("somme").innerHTML=somme;
}
var myemail;
function fnct15()
    {
      myemail=document.getElementById("demo3").textContent;
      somme=document.getElementById("somme").textContent;
      localStorage.setItem("myemail",myemail);
      localStorage.setItem("somme",somme);
      window.location.href="buy.php";
    }   




