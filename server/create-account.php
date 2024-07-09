<?php
include('init.php');
include('head.php');
?>
<header style="display: none;" class="top-bar" data-page-type="account-creation"></header>
<div class="setup-modal" id="set-1">
    <div class="setup-message">
        <span class="title">Welcome to Nintendo TVii</span>
        <p>Nintendo TVii is an app that allows you to read information about the latest TV shows, movies, live events, and sports<br>
        from your Wii U GamePad. You can use Miiverse to comment about a show, recommend shows to friends, and interact with other people about programs.</p>
    </div>
    <a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_OK" data-swap data-show="#set-2" data-hide="#set-1" class="button">Continue</a>
</div>

<div class="setup-modal none" id="set-2">
    <div class="setup-message">
    <span class="title">Setting up your profile</span>
        <p>Starting up, you have to set up your profile so people can find you and see your favorite shows and friends.<br>
    You can enter a short description about yourself and programs you like here:</p>
    <textarea navi_mouse data-sound="SE_COMMON_TEXTBOX" navi_target navi_no_reset class="brief_bio" placeholder="Write a short description about you here..." maxlength="100"></textarea>
    <p>Now, input your birthday, this information is optional, like the description.</p>
    <span>Select by day, month and year.</span>
    <div class="bday-inputs">

    <select navi_mouse name="d" navi_target navi_no_reset>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
    </select>

    <select navi_mouse name="m" navi_target navi_no_reset>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
    </select>

    <select navi_mouse name="y" navi_target navi_no_reset>
    <option value="1900">1900</option>
<option value="1901">1901</option>
<option value="1902">1902</option>
<option value="1903">1903</option>
<option value="1904">1904</option>
<option value="1905">1905</option>
<option value="1906">1906</option>
<option value="1907">1907</option>
<option value="1908">1908</option>
<option value="1909">1909</option>
<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>

    </select>

    </div>
</div>
<a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_CANCEL" data-swap data-show="#set-1" data-hide="#set-2" class="button accesskey-b">Back</a>
<a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_OK" data-swap data-show="#set-3" data-hide="#set-2" class="button">Continue</a>
</div>

<div class="setup-modal none" id="set-3">
    <div class="setup-message">
        <span class="title">Select some of your favorite shows/actors</span>
        <p>You can now select shows or actors to add to your favorites list.<br>
        Use the search bar to search for a show or actor that you may like, and then touch it to add it to your favorites (up to 30 programs/actors in this section), you can favorite shows and actors later after the page set up (up to 100).</p>
        <input type="text" data-sound="SE_COMMON_TEXTBOX" navi_mouse class="recommend" navi_target navi_no_reset placeholder="Search for programs or actors to favorite..." vino_suggest/>

        <div class="programs programs-list-js-add">
        </div>
    </div>
    <a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_CANCEL" data-swap data-show="#set-2" data-hide="#set-3" class="button  accesskey-b">Back</a>
    <a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_OK" data-swap data-show="#set-4" data-hide="#set-3" class="button">Continue</a>
</div>

<div class="setup-modal none" id="set-4">
    <div class="setup-message">
        <span class="title">Setup Finished</span>
        <p>Initial setup of your profile has finished.<br>
        Please click Continue to confirm your details and create your account, if you want to change something click Back.</p>
    </div>
    <a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_CANCEL" data-swap data-show="#set-3" data-hide="#set-4" class="button  accesskey-b">Back</a>
    <a navi_target navi_no_reset href="javascript:void(0)" data-sound="SE_WAVE_OK" data-finish-setup class="button">Create</a>
</div>

<div class="setup-modal none" id="set-5">
    <div class="setup-message">
        <span class="title">Ready to use</span>
        <p class="start">Have fun in Nintendo TVii!</p>
    </div>
    <a navi_target navi_no_reset onclick="vino.soundStopAll();" href="/" data-sound="SE_WAVE_OK" class="button">Start</a>
</div>

<?php
    include('footer.php');
?>