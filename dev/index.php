<!DOCTYPE html>
<!-- 
If you want to add the social tags add the following to the html tag:
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"
-->
<html lang="en-US" class="no-js">
<head>
  <meta charset="utf-8"> <!-- This should always be the first tag -->

  
  <!-- 
    The following tag can be add to the htaccess as well,
    putting it in the head will cause validation errors
  -->
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->


  <title>Vanilla</title>
  <meta name="description" content="">
  <meta name="robots" content="index, follow">
  <meta name="author" content="">

  <meta content="Wed, 11 Sep 2013 14:20:07 -0440" name="date">
  <meta name="generator" content="">
  <meta http-equiv="content-language" content="en">


  <!-- 
    You can set a max and min voom, but for accessability you shouldn't set a max width 
  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
    Good for SEO
  -->
  <!-- <link rel="canonical" href="#"> -->
  <!-- <link rel="home" href="#"> -->
  <!-- <link rel="prev" href="#"> -->
  <!-- <link rel="next" href="#"> -->
  <!-- <link rel="author" href="#"> -->
  <!-- <link rel="publisher" href="#"> -->


  <!-- 
    Place favicon.ico and apple-touch-icon.png in the root directory 
  -->
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
  <!-- <link rel="apple-touch-icon" href="#"> -->
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="#"> -->
  <!-- <link rel="apple-touch-icon" sizes="120x120" href="#"> -->
  <!-- <link rel="apple-touch-icon" sizes="152x152" href="#"> -->


  <!-- 
    Social Tags - Facebook opengraph and Twitter cards 
  -->


  <!-- 
    Optional Microsoft Tags 
  -->
  <!-- <meta name="msapplication-TileColor" content="#73c5d3"/> -->
  <!-- <meta name="msapplication-TileImage" content="sbx_144x144.png"/> -->

  <!-- 
    RSS feeds 
  -->
  <!-- <link rel="alternate" type="application/rss+xml" title="Website RSS Feed" href="#"> -->

  <link href="css/reset.css" rel="stylesheet" type='text/css' media='all'>
  <link href="css/style.css" rel="stylesheet" type='text/css' media='all'>

  <style type="text/css">
    .style-guide-main {
      max-width: 960px;
      margin: 15px auto;
      padding: 0 15px;
    }
  </style>

  <script type="text/javascript" src="js/libs/modernizr.js"></script>

</head>
<body>
<main class="style-guide-main">
  <h1>Heading Size 1</h1>
  <h2>Heading Size 2</h2>
  <h3>Heading Size 3</h3>
  <h4>Heading Size 4</h4>
  <h5>Heading Size 5</h5>
  <h6>Heading Size 6</h6>
  <p>A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>

  <div class="text">
    <p><a href="#">This is a text link</a></p>
    <p><strong>Strong is used to indicate strong importance</strong></p>
    <p><em>This text has added emphasis</em></p>
    <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>
    <p>The <i>i element</i> is text that is set off from the normal text</p>
    <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>
    <p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>
    <p><s>This text has a strikethrough</s></p>
    <p>Superscript<sup>®</sup></p>
    <p>Subscript for things like H<sub>2</sub>O</p>
    <p><small>This small text is small for for fine print, etc.</small></p>
    <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
    <p>Keybord input: <kbd>Cmd</kbd></p>
    <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>
    <p><cite>This is a citation</cite>
    </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>
    <p>The <mark>mark element</mark> indicates a highlight</p>
    <p><code>This is what inline code looks like.</code></p>
    <p><samp>This is sample output from a computer program</samp></p>
    <p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>
  </div>

  <blockquote>
    <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation.</p>
    <cite class="citation">Quote Source</cite>
  </blockquote>

  <ul>
    <li>This is a list item in an unordered list</li>
    <li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
    <li>
      Lists can be nested inside of each other
      <ul>
        <li>This is a nested list item</li>
        <li>This is another nested list item in an unordered list</li>
      </ul>
    </li>
    <li>This is the last list item</li>
  </ul>

  <ol>
    <li>This is a list item in an ordered list</li>
    <li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
    <li>
      Lists can be nested inside of each other
      <ol>
        <li>This is a nested list item</li>
        <li>This is another nested list item in an ordered list</li>
      </ol>
    </li>
    <li>This is the last list item</li>
  </ol>

  <dl>
    <dt>Definition List</dt>
    <dd>A number of connected items or names written or printed consecutively, typically one below the other.</dd>
      <dt>This is a term.</dt>
      <dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>
      <dt>Here is another term.</dt>
      <dd>And it gets a definition too, which is this line.</dd>
      <dt>Here is term that shares a definition with the term below.</dt>
      <dd>And it gets a definition too, which is this line.</dd>
  </dl>

  <table summary="Summary of table content">
    <caption>Possible table caption</caption>
    <thead>
      <tr>
        <th>Table Heading 1</th>
        <th>Table Heading 2</th>
        <th>Table Heading 3</th>
        <th>Table Heading 4</th>
        <th>Table Heading 5</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Table Footer 1</th>
        <th>Table Footer 2</th>
        <th>Table Footer 3</th>
        <th>Table Footer 4</th>
        <th>Table Footer 5</th>
      </tr>
    </tfoot>
    <tbody>
    <tr>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
      <td>Table Cell 4</td>
      <td>Table Cell 5</td>
    </tr>
    <tr>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
      <td>Table Cell 4</td>
      <td>Table Cell 5</td>
    </tr>
    <tr>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
      <td>Table Cell 4</td>
      <td>Table Cell 5</td>
    </tr>
    <tr>
      <td>Table Cell 1</td>
      <td>Table Cell 2</td>
      <td>Table Cell 3</td>
      <td>Table Cell 4</td>
      <td>Table Cell 5</td>
    </tr>
    </tbody>
  </table>

  <hr />

  <pre>P R E F O R M A T T E D T E X T
! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~ 
</pre>

<time datetime="2013-04-06T12:32+00:00">2 weeks ago</time>

<p><a href="#" class="btn">Button</a></p>

<p><a href="#" class="btn btn-primary">Primary Button</a></p>

<p><a href="#" class="btn btn-secondary">Secondary Button</a></p>

<p><a href="#" class="btn btn-tertiary">Tertiary Button</a></p>

<p><a href="#" class="btn btn-primary btn-xl">XL Button</a></p>

<p><a href="#" class="btn btn-primary btn-lg">LG Button</a></p>

<p><a href="#" class="btn btn-primary">Button</a></p>

<p><a href="#" class="btn btn-primary btn-sm">SM Button</a></p>

<p><a href="#" class="btn btn-primary btn-xs">XS Button</a></p>

<div>
  <img src="http://static.comicvine.com/uploads/scale_small/3/35127/1993979-americanv.jpg" class="img-rounded" alt="" style="width: 30%; margin: 15px 1%;">
  <img src="http://static.comicvine.com/uploads/scale_small/3/35127/1993979-americanv.jpg" class="img-circle" alt="" style="width: 30%; margin: 15px 1%;">
  <img src="http://static.comicvine.com/uploads/scale_small/3/35127/1993979-americanv.jpg" class="img-framed" alt="" style="width: 30%; margin: 15px 1%;">

</div>

</main>

<script src="//localhost:35729/livereload.js"></script>
</body> 
</html>