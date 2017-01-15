<!-- Main -->
<div id="main" class="wrapper style1">
    <section class="container">
        <header class="major">
            <h2>Contact</h2>
            <span class="byline">Laat hier een boodschap achter aan Robin.</span>
        </header>
        <article class="articleContact">
            <form name="contactform" method="post" action="mail.php">
                <table width="450px">
                    <tr>
                        <td valign="top">
                            <label for="last_name">Naam</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="last_name" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">E-mail</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="email" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="comments">Bericht</label>
                        </td>
                        <td valign="top">
                            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <br/></br>
                            <input type="submit" value="Verzenden">
                        </td>
                    </tr>
                </table>
            </form>
        </article>
    </section>
</div>