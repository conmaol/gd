<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="1.0">

  <xsl:import href="references.xsl"/>

  <xsl:output encoding="UTF-8" method="html"/>

  <xsl:param name="uri"/>

  <xsl:template match="/">
    <xsl:apply-templates/>
  </xsl:template>

  <xsl:template match="/module">
    <a href="{concat($uri,'&amp;print=')}"
      style="float: right; text-decoration: none; font-size: normal">[printable]</a>
    <h1>
      <xsl:apply-templates select="h/child::node()"/>
    </h1>
    <xsl:apply-templates select="p | module | section"/>
  </xsl:template>

  <xsl:template match="section">
    <section>
      <hr/>
      <h5 class="text-muted text-uppercase">
        <xsl:apply-templates select="h/child::node()"/>
        <xsl:if test="@id">
          <xsl:text> </xsl:text>
          <a data-bs-toggle="collapse" href="{concat('#',@id)}" class="fs-6 fw-normal">[+/-]</a>
        </xsl:if>
      </h5>
      <section>
        <xsl:if test="@id">
          <xsl:attribute name="class">
            <xsl:text>collapse</xsl:text>
          </xsl:attribute>
          <xsl:attribute name="id">
            <xsl:value-of select="@id"/>
          </xsl:attribute>
        </xsl:if>
        <xsl:apply-templates
          select="p[not(preceding-sibling::module or preceding-sibling::section)]"/>
        <section class="ms-5">
          <xsl:apply-templates
            select="p[preceding-sibling::module or preceding-sibling::section] | module | section"/>
        </section>
      </section>
    </section>
  </xsl:template>

  <xsl:template match="*/module">
    <section>
      <hr/>
      <h5>
        <xsl:apply-templates select="h/child::node()"/>
        <xsl:if test="@id">
          <xsl:text> </xsl:text>
          <a data-bs-toggle="collapse" href="{concat('#',@id)}" class="fs-6 fw-normal">[+/-]</a>
        </xsl:if>
      </h5>
      <section>
        <xsl:if test="@id">
          <xsl:attribute name="class">
            <xsl:text>collapse</xsl:text>
          </xsl:attribute>
          <xsl:attribute name="id">
            <xsl:value-of select="@id"/>
          </xsl:attribute>
        </xsl:if>
        <xsl:apply-templates
          select="p[not(preceding-sibling::module or preceding-sibling::section)]"/>
        <section class="ms-5">
          <xsl:apply-templates
            select="p[preceding-sibling::module or preceding-sibling::section] | module | section"/>
        </section>
      </section>
    </section>
  </xsl:template>

  <xsl:template match="p">
    <p>
      <xsl:apply-templates/>
    </p>
  </xsl:template>

  <!-- lists -->

  <xsl:template match="ol[@id]">
    <small>
      <a data-toggle="collapse" href="{concat('#',@id)}">[+/-]</a>
    </small>
    <ol class="collapse" id="{@id}">
      <xsl:apply-templates/>
    </ol>
  </xsl:template>

  <xsl:template match="ol">
    <ol>
      <xsl:apply-templates/>
    </ol>
  </xsl:template>

  <xsl:template match="ul[@id]">
    <a data-bs-toggle="collapse" href="{concat('#',@id)}">[+/-]</a>
    <ul class="collapse" id="{@id}">
      <xsl:apply-templates/>
    </ul>
  </xsl:template>

  <xsl:template match="ul">
    <ul>
      <xsl:apply-templates/>
    </ul>
  </xsl:template>









  <xsl:template match="li">
    <li>
      <xsl:apply-templates/>
    </li>
  </xsl:template>






  <!-- text content -->

  <xsl:template match="a">
    <a href="{@href}">
      <xsl:apply-templates/>
    </a>
  </xsl:template>

  <xsl:template match="ax">
    <a href="{@href}" target="_new">
      <xsl:apply-templates/>
    </a>
  </xsl:template>

  <xsl:template match="m">
    <mark style="padding: 0.08em;">
      <xsl:apply-templates/>
    </mark>
  </xsl:template>

  <xsl:template match="g">
    <strong>
      <xsl:apply-templates/>
    </strong>
  </xsl:template>

  <xsl:template match="m/emph | g/emph">
    <u>
      <xsl:apply-templates/>
    </u>
  </xsl:template>

  <xsl:template match="emph">
    <em>
      <xsl:apply-templates/>
    </em>
  </xsl:template>

  <xsl:template match="en">
    <span class="text-muted en">
      <xsl:text>‘</xsl:text>
      <xsl:apply-templates/>
      <xsl:text>’</xsl:text>
    </span>
  </xsl:template>

  <xsl:template match="bad">
    <span style="color: green">*</span>
    <span
      style="font-style: italic; text-decoration-line: underline; text-decoration-style: wavy; text-decoration-color: green;"
      title="gonny no!">
      <xsl:apply-templates/>
    </span>
  </xsl:template>

  <xsl:template match="note">
    <small class="text-muted">
      <xsl:apply-templates/>
    </small>
  </xsl:template>

  <xsl:template match="ed">
    <span class="small text-danger">
      <xsl:text>[Ed. – </xsl:text>
      <xsl:apply-templates/>
      <xsl:text>]</xsl:text>
    </span>
  </xsl:template>

  <xsl:template match="masc">
    <em>masc.</em>
  </xsl:template>

  <xsl:template match="fem">
    <em>fem.</em>
  </xsl:template>

  <xsl:template match="adj">
    <em>adj.</em>
  </xsl:template>

  <xsl:template match="vb">
    <em>vb.</em>
  </xsl:template>

  <xsl:template match="prep">
    <em>prep.</em>
  </xsl:template>

  <xsl:template match="etc">
    <em>&amp;c</em>
  </xsl:template>

  <xsl:template match="eg">
    <em>eg.</em>
  </xsl:template>

  <xsl:template match="slen">
    <em>slen.</em>
  </xsl:template>

  <xsl:template match="gen">
    <em>gen.</em>
  </xsl:template>

  <xsl:template match="pl">
    <em>plur.</em>
  </xsl:template>

  <!-- corpus examples -->

  <xsl:template match="xl[@id]">
    <a data-bs-toggle="collapse" href="{concat('#',@id)}">[ex +/-]</a>
    <ul style="list-style-type: none;" class="collapse" id="{@id}">
      <xsl:apply-templates/>
    </ul>
  </xsl:template>

  <xsl:template match="xl">
    <ul>
      <xsl:apply-templates/>
    </ul>
  </xsl:template>

  <xsl:template match="xl/li">
    <li>
      <xsl:apply-templates select="gd | tr"/>
    </li>
  </xsl:template>

  <xsl:template match="xl[not(@id)]/li/gd">
    <span style="color: #556b2f;">
      <xsl:apply-templates/>
    </span>
  </xsl:template>

  <xsl:template match="xl[@id]/li/gd">
    <small>
      <xsl:apply-templates/>
    </small>
  </xsl:template>

  <xsl:template match="xl/li/tr">
    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
      style="text-decoration: none;">
      <xsl:attribute name="data-bs-title">
        <xsl:text>“</xsl:text>
        <xsl:apply-templates/>
        <xsl:text>”</xsl:text>
        <xsl:apply-templates select="../note"/>
      </xsl:attribute> [?] </a>
  </xsl:template>

  <xsl:template match="xl[not(@id)]/li/ref"> </xsl:template>

  <xsl:template match="xl[@id]/li/ref">
    <a href="#" style="text-decoration: none;" data-bs-toggle="tooltip" data-bs-placement="bottom"
      data-bs-html="true">
      <xsl:attribute name="data-bs-title">
        <xsl:call-template name="biblio"/>
        <xsl:apply-templates/>
      </xsl:attribute>
      <xsl:text>📚</xsl:text>
    </a>
  </xsl:template>

  <xsl:template match="xl/li/note">
    <!--<a href="#" style="text-decoration: none;" data-bs-toggle="tooltip" data-bs-placement="bottom"
      data-bs-html="true">
      <xsl:attribute name="data-bs-title">-->
    <xsl:text>&lt;br/&gt;Notes – </xsl:text>
    <xsl:apply-templates/>
    <!--</xsl:attribute>
      <xsl:text>💡</xsl:text>
    </a>-->
  </xsl:template>




</xsl:stylesheet>
