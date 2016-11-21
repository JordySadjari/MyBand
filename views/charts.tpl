<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<h1 style="margin-left: 20px; font-size: 2.3em;">top charts</h1>

<form>
<select name="users" onchange="showUser(this.value)">
    <option value="">Select a chart:</option>
    <option value="1">top anime</option>
    <option value="2">top manga</option>
    <option value="2">top characters</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
