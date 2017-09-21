<script type="text/javascript">

// Google Internal Site Search script- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use

//Enter domain of site to search.
var domainroot="www.benedum.org"

function Gsitesearch(curobj){
curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}

</script>

    <table border="0">

        <form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)">
        <input name="q" type="hidden" />
			<tr>
				<td><input type="text" value="Site Search" name="qfront" style="width:140px;"></td>
				<td><input type="submit" value="GO"></td>
			</tr>
		</form>
	</table>