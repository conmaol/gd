<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="1.0">

    <xsl:template name="biblio">
        <xsl:choose>
            <xsl:when test="@text = '2'">
                <xsl:text>2001 </xsl:text>
                <em>Sgeulachdan Dhòmhnaill Alasdair</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '3'">
                <xsl:text>2001 Donald MacDonald </xsl:text>
                <em>Smuaintean fo Éiseabhal</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '6'">
                <xsl:text>(1996) </xsl:text> &lt;em&gt;A’ Tasgadh anns an Ùine Romhainn&lt;/em&gt; </xsl:when>
            <xsl:when test="@text = '14'">
                <xsl:text>1990 Calum MacMhaoilein </xsl:text>
                <em>A’ Sireadh an Sgadain</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '16'">
                <xsl:text>1989 Iain MacLeòid </xsl:text>
                <em>Spuirean na h-Iolaire</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '28'">
                <xsl:text>1982 Ealasaid Chaimbeul </xsl:text>
                <em>Air Mo Chuairt</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '31'">
                <xsl:text>1977 Pàdruig Moireasdan </xsl:text>
                <em>Ugam agus Bhuam</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '32'">
                <xsl:text>1976 </xsl:text>
                <em>Gàidhlig ann an Albainn</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '34'">
                <xsl:text>(1974) Dòmhnull Iain MacDhòmhnaill </xsl:text> &lt;em&gt;Fo Sgail A’
                Swastika&lt;/em&gt; </xsl:when>
            <xsl:when test="@text = '36'">
                <xsl:text>1973 Cailein T. MacCoinnich </xsl:text>
                <em>Nach Neonach Sin</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '38'">
                <xsl:text>1973 Iain Aonghas MacLeòid </xsl:text>
                <em>Criomagan Ioma-Dhathte</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '40'">
                <xsl:text>1973 Eilidh Watt </xsl:text>
                <em>A’ Bhratach Dhealrach</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '43'">
                <xsl:text>1970  Mairi M. NicGill-Eathain </xsl:text>
                <em>Lus Chrun a Griomasaidh</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '44'">
                <xsl:text>1970 </xsl:text>
                <em>Briseadh na Cloiche agus Sgeulachdan Eile</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '45'">
                <xsl:text>1969 </xsl:text>
                <em>Domhnall Ruadh Choruna</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '47'">
                <xsl:text>1968 Dòmhnall Ruadh Phàislig </xsl:text>
                <em>Sporan Dhòmhnaill</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '48'">
                <xsl:text>1988 </xsl:text>
                <em>Sgrìobhaidhean Choinnich MhicLeòid</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '69'">
                <xsl:text>1911 Katherine Whyte Grant </xsl:text>
                <em>Aig Tigh na Beinne</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81'">
                <xsl:text>1892–1904 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-6'">
                <xsl:text>1897–8 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 6 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-9-18'">
                <xsl:text>1900 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 9 No. 18 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-10-3'">
                <xsl:text>1901 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 10 No. 3 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-10-24'">
                <xsl:text>1902 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 10 No. 24 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-11-7'">
                <xsl:text>1902 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 11 No. 7 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-11-9'">
                <xsl:text>1902 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 11 No. 9 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-11-26'">
                <xsl:text>1903 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 11 No. 26 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '81-12-15'">
                <xsl:text>1904 </xsl:text>
                <em>Mac-Talla</em>
                <xsl:text> Vol. 12 No. 15 </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '102'">
                <xsl:text>1871–7 </xsl:text>
                <em>An Gaidheal</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '106'">
                <xsl:text>1867 Aonghas Mac Coinnich </xsl:text>
                <em>Eachdraidh na h-Alba</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '160'">
                <xsl:text>1783–1801 </xsl:text>
                <em>Leabhraiche an t-Seann Tiomnaidh</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '198'">
                <xsl:text>1976 Iain Mac A’ Ghobhainn </xsl:text>
                <em>An t-Aonaran</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '199'">
                <xsl:text>1910 Domhnull MacEacharn </xsl:text>
                <em>Am Fear-Ciuil</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '204'">
                <xsl:text>1960 Iain Mac A’ Ghobhainn </xsl:text>
                <em>Bùrn is Aran</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '205'">
                <xsl:text>1963 Iain Mac A’ Ghobhainn </xsl:text>
                <em>An Dubh is an Gorm</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '217-1'">
                <xsl:text>1917 </xsl:text>
                <em>An Ròsarnach I</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '217-2'">
                <xsl:text>1918 </xsl:text>
                <em>An Ròsarnach II</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '217-4'">
                <xsl:text>1930 </xsl:text>
                <em>An Ròsarnach IV</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '218-4'">
                <xsl:text>1907 </xsl:text>
                <em>Guth na Bliadhna IV</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '232'">
                <xsl:text>1897–1900 </xsl:text>
                <em>Sgeulachdan Arabianach </em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '232-1'">
                <xsl:text>1897 </xsl:text>
                <em>Sgeulachdan Arabianach I</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '234-2'">
                <xsl:text>1905-1907 Henry Whyte </xsl:text>
                <em>Naigheachdan Fìrinneach II</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '267'">
                <xsl:text>1976 Iain MacGilleathain </xsl:text>
                <em>Odusseia Homair</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '294'">
                <xsl:text>1926 Alasdair Camshron </xsl:text>
                <em>Am Bard</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '295'">
                <xsl:text>1914 John Francis Campbell </xsl:text>
                <em>Gille a’ Bhuidseir</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '309'">
                <xsl:text>1998 Coinneach MacLeòid </xsl:text>
                <em>Orain Red</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '313'">
                <xsl:text>1985 </xsl:text>
                <em>Eadar Peann is Paipear</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '317'">
                <xsl:text>1993 Pòl MacAonghais </xsl:text>
                <em>An Guth Aoibhneach</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '328'">
                <xsl:text>2005 Tormod MacGill-Eain </xsl:text>
                <em>Dacha mo Ghaoil</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '331'">
                <xsl:text>2008 Màiri Anna NicDhòmhnaill </xsl:text>
                <em>Cleas Sgathain</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '333'">
                <xsl:text>2011 Seonaidh Ailig Mac a’ Phearsain </xsl:text>
                <em>Steall à Iomadh Lòn</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '337'">
                <xsl:text>2010 Maoileas Caimbeul </xsl:text>
                <em>Teas</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-1'">
                <xsl:text>1952 </xsl:text>
                <em>Gairm 1</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-2'">
                <xsl:text>1952 </xsl:text>
                <em>Gairm 2</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-3'">
                <xsl:text>1953 </xsl:text>
                <em>Gairm 3</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-4'">
                <xsl:text>1953 </xsl:text>
                <em>Gairm 4</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-5'">
                <xsl:text>1953 </xsl:text>
                <em>Gairm 5</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-11'">
                <xsl:text>1955 </xsl:text>
                <em>Gairm 11</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-12'">
                <xsl:text>1955 </xsl:text>
                <em>Gairm 12</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-17'">
                <xsl:text>1956 </xsl:text>
                <em>Gairm 17</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-19'">
                <xsl:text>1957 </xsl:text>
                <em>Gairm 19</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-20'">
                <xsl:text>1957 </xsl:text>
                <em>Gairm 20</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-22'">
                <xsl:text>1957 </xsl:text>
                <em>Gairm 22</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-23'">
                <xsl:text>1958 </xsl:text>
                <em>Gairm 23</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-24'">
                <xsl:text>1958 </xsl:text>
                <em>Gairm 24</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-30'">
                <xsl:text>1959 </xsl:text>
                <em>Gairm 30</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-31'">
                <xsl:text>1960 </xsl:text>
                <em>Gairm 31</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-32'">
                <xsl:text>1960 </xsl:text>
                <em>Gairm 32</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-34'">
                <xsl:text>1960 </xsl:text>
                <em>Gairm 34</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-37'">
                <xsl:text>1961 </xsl:text>
                <em>Gairm 37</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-41'">
                <xsl:text>1962 </xsl:text>
                <em>Gairm 41</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-43'">
                <xsl:text>1963 </xsl:text>
                <em>Gairm 43</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-44'">
                <xsl:text>1963 </xsl:text>
                <em>Gairm 44</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-45'">
                <xsl:text>1963 </xsl:text>
                <em>Gairm 45</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-46'">
                <xsl:text>1964 </xsl:text>
                <em>Gairm 46</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-48'">
                <xsl:text>1964 </xsl:text>
                <em>Gairm 48</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-49'">
                <xsl:text>1964 </xsl:text>
                <em>Gairm 49</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-55'">
                <xsl:text>1966 </xsl:text>
                <em>Gairm 55</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-56'">
                <xsl:text>1966 </xsl:text>
                <em>Gairm 56</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-57'">
                <xsl:text>1966 </xsl:text>
                <em>Gairm 57</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-59'">
                <xsl:text>1967 </xsl:text>
                <em>Gairm 59</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-66'">
                <xsl:text>(19??) </xsl:text> &lt;em&gt;Gairm 66&lt;/em&gt; </xsl:when>
            <xsl:when test="@text = '400-77'">
                <xsl:text>1971 </xsl:text>
                <em>Gairm 77</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-78'">
                <xsl:text>1972 </xsl:text>
                <em>Gairm 78</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-80'">
                <xsl:text>1972 </xsl:text>
                <em>Gairm 80</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-87'">
                <xsl:text>1974 </xsl:text>
                <em>Gairm 87</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-105'">
                <xsl:text>1978 </xsl:text>
                <em>Gairm 105</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-109'">
                <xsl:text>1979 </xsl:text>
                <em>Gairm 109</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-111'">
                <xsl:text>1980 </xsl:text>
                <em>Gairm 111/112</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-126'">
                <xsl:text>1984 </xsl:text>
                <em>Gairm 126</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-128'">
                <xsl:text>1984 </xsl:text>
                <em>Gairm 128</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-129'">
                <xsl:text>1984 </xsl:text>
                <em>Gairm 129</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-133'">
                <xsl:text>1985 </xsl:text>
                <em>Gairm 133</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-142'">
                <xsl:text>1988 </xsl:text>
                <em>Gairm 142</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-144'">
                <xsl:text>1988 </xsl:text>
                <em>Gairm 144</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-151'">
                <xsl:text>1990 </xsl:text>
                <em>Gairm 151</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-154'">
                <xsl:text>1991 </xsl:text>
                <em>Gairm 154</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-162'">
                <xsl:text>1993 </xsl:text>
                <em>Gairm 162</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-168'">
                <xsl:text>1994 </xsl:text>
                <em>Gairm 168</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '400-193'">
                <xsl:text>2000 </xsl:text>
                <em>Gairm 193</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '401-1'">
                <xsl:text>19.. </xsl:text>
                <em>An Deo-greine I</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '401-12'">
                <xsl:text>19.. </xsl:text>
                <em>An Deo-greine XII</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '501'">
                <xsl:text>2005 Iain Mac A’ Ghobhainn </xsl:text>
                <em>Am Miseanaraidh</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '601'">
                <xsl:text>2004 Colin Mark </xsl:text>
                <em>Am Faclair Gàidhlig-Beurla</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '602'">
                <xsl:text>1901 Edward Dwelly </xsl:text>
                <em>Illustrated Gaelic to English Dictionary</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '603'">
                <xsl:text>2004 Boyd Robertson &amp; Ian MacDonald </xsl:text>
                <em>Teach Yourself Gaelic Dictionary</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '605'">
                <xsl:text>2001 Angus Watson </xsl:text>
                <em>The Essential Gaelic-English Dictionary</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '605a'">
                <xsl:text>2005 Angus Watson </xsl:text>
                <em>The Essential English-Gaelic Dictionary</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '606'">
                <xsl:text>2001 </xsl:text>
                <em>Faclair na Pàrlamaid</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '607'">
                <xsl:text>2017 Richard Cox </xsl:text>
                <em>Geàrr-Ghràmar na Gàidhlig</em>
                <xsl:text> </xsl:text>
                <a target="_new" style="text-decoration: none"
                    href="https://www.gaelicbooks.org/explore-the-shop/non-fiction/gaelic-learning/gearr-ghramar-na-gaidhlig"
                    >🛒</a>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '608'">
                <xsl:text>2002 Michel Byrne </xsl:text>
                <em>Gràmar na Gàidhlig</em>
                <xsl:text> </xsl:text>
                <a target="_new" style="text-decoration: none"
                    href="https://www.gaelicbooks.org/explore-the-shop/non-fiction/gaelic-learning/gramar-na-gaidhlig-ur"
                    >🛒</a>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '609'">
                <xsl:text>(2008) Roibeard Ó Maolalaigh with Iain MacAoinghuis </xsl:text>
                &lt;br/&gt; &lt;em&gt;Gaelic in Twelve Weeks&lt;/em&gt; </xsl:when>
            <xsl:when test="@text = '610'">
                <xsl:text>2007 Joan NicDhòmhnaill </xsl:text>
                <em>Iomairt Thaigh na Gàidhlig Dhùn Èideann</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '611'">
                <xsl:text>2006 Colin Mark </xsl:text>
                <em>Gaelic Verbs – Systemised and Simplified</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '612'">
                <xsl:text>1902 H. Cameron Gillies </xsl:text>
                <em>The Elements of Gaelic Grammar</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '613'">
                <xsl:text>2008 William Lamb </xsl:text>
                <em>Scottish Gaelic Speech and Writing</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '614'">
                <xsl:text>1923 George Calder </xsl:text>
                <em>A Gaelic Grammar</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '615'">
                <xsl:text>1895 Reid </xsl:text>
                <em>??</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '616'">
                <xsl:text>1911 [1948] MacLaren </xsl:text>
                <em>??</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '617'">
                <xsl:text>1971 Roderick Mackinnon </xsl:text>
                <em>Teach Yourself Gaelic</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '618'">
                <xsl:text>1936 Nicolson </xsl:text>
                <em>??</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '619'">
                <xsl:text>1993 William Gillies </xsl:text>
                <em>Scottish Gaelic</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '620'">
                <xsl:text>(1943) Lachlann MacFhionghuin </xsl:text>
                <em>Leabhraichean Leughaidh: A’ Cheud Cheum</em>
                <xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@text = '621'">
                <xsl:text>(1943) Lachlann MacFhionghuin </xsl:text> &lt;br/&gt; &lt;em&gt;Leabhar na
                Cloinne Bige&lt;/em&gt; </xsl:when>
            <xsl:when test="@text = 'wiki'">
                <xsl:text>Uicipeid – </xsl:text>
            </xsl:when>
        </xsl:choose>
    </xsl:template>

</xsl:stylesheet>
