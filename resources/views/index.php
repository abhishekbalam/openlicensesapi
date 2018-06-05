<!DOCTYPE html>
<html lang="en-US">
  <head>
  
    <title>Open Licences API</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#157878">
    <link rel="stylesheet" href="/assets/css/style.css?v=">
  
  </head>
  <body>
    
    <section class="page-header">
      <h1 class="project-name">Open Licences API</h1>
      <h2 class="project-tagline">A simple API to download popular Open Source Licences directly via the Terminal.</h2>
          <a href="https://github.com/abhishekbalam/openlicensesapi" class="btn">View on GitHub</a>
        
    </section>

    <section class="main-content">
      <h1 id="why-to-use-this">Why to use this?</h1>

<p>Often when creating opensource project directories we need to include a <code class="highlighter-rouge">license</code> file and this api will save you some time doing that.</p>

<p>Even though sites like GiHub have a GUI option to make a file for you, it is only provided at initialization and it requires extra steps just to include that single file to the directory.</p>

<p>This simple API scrapes the website <a href="https://choosealicense.com/">choosealicense.com</a>, and provides the output either as HTML or as plain text (default).</p>

<p>Instead of hosting the content myself, I chose to scrape the site because they will be update-proof, without any need for updation.</p>

<h1 id="how-to-use-it">How to use it?</h1>

<p>There are 2 output formats:</p>
<ul>
  <li>Plain Text</li>
  <li>HTML</li>
</ul>

<p>Plain text can be used to save to a file.</p>

<p>The HTML format can be used to add to websites, rendering perfectly in the browser.</p>

<p>This API can be used with either tools:</p>
<ul>
  <li><a href="https://curl.haxx.se/">curl</a></li>
  <li><a href="https://www.gnu.org/software/wget/">wget</a></li>
  <li><a href="https://www.getpostman.com/">Postman</a></li>
  <li>Web Browsers etc</li>
</ul>

<h1 id="usage">Usage</h1>

<p>Allowed HTTPs methods:</p>
<ul>
  <li><code class="highlighter-rouge">GET</code> only</li>
</ul>

<p>Description of usual server responses:</p>
<ul>
  <li>200<code class="highlighter-rouge">OK</code> : The request was successful .</li>
  <li>400 <code class="highlighter-rouge">Bad Request</code> : The request could not be understood or was missing required parameters.</li>
  <li>403 <code class="highlighter-rouge">Forbidden</code> : Access denied.</li>
  <li>404 <code class="highlighter-rouge">Not Found</code> : Resource was not found.</li>
  <li>405 <code class="highlighter-rouge">Method Not Allowed</code> : Requested method is not supported for resource.</li>
  <li>500 <code class="highlighter-rouge">Internal Server Error</code> : Some problem on the server side, please <a href="https://github.com/abhishekbalam/openlicensesapi/issues?q=is%3Aissue+is%3Aopen+sort%3Aupdated-desc">contact me</a> if you see this.</li>
</ul>

<h1 id="api--requests">API  Requests</h1>

<p>They should be in the following format:</p>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>GET openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span>/<span class="o">{</span><span class="nb">type</span><span class="o">}</span>/
</code></pre></div></div>

<h2 id="url-parameters">URL Parameters</h2>

<h3 id="--required">- Required</h3>

<ul>
  <li><code class="highlighter-rouge">id</code> : This is used to select which license to use</li>
</ul>

<p>The following Licenses are available with their corresponding <strong>ids</strong> :</p>

<table>
  <thead>
    <tr>
      <th style="text-align: left">ID</th>
      <th style="text-align: left">LICENSE</th>
      <th style="text-align: left"> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: left">1</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/agpl-3.0/">GNU AGPLv3</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">2</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/gpl-3.0/">GNU GPLv3</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">3</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/lgpl-3.0/">GNU LGPLv3</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">4</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/mpl-2.0/">Mozilla Public License 2.0</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">5</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/apache-2.0/">Apache License 2.0</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">6</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/mit/">MIT License</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
    <tr>
      <td style="text-align: left">7</td>
      <td style="text-align: left"><a href="https://choosealicense.com/licenses/unlicense/">The Unlicense</a></td>
      <td style="text-align: left"><a href="https://openlicencesapi.herokuapp.com/1/html">Read</a></td>
    </tr>
  </tbody>
</table>

<h3 id="--optional">- Optional</h3>

<ul>
  <li><code class="highlighter-rouge">type</code> : This is an optional parameter used to determine the type of response needed which is either:</li>
</ul>

<h4 id="1-plain-text-default">1. Plain Text (Default)</h4>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>GET openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span>/
</code></pre></div></div>

<p>OR</p>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>GET openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span>/text
</code></pre></div></div>

<h4 id="2-html">2. HTML</h4>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code>GET openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span>/html
</code></pre></div></div>

<h1 id="usage-with-tools">Usage with tools</h1>

<h3 id="1-curl">1. Curl</h3>

<p>Curl is a wonderful tool to get HTTP(s) responses and pipe it to STDOUT.</p>

<p>It can be used as follows:</p>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nv">$ </span>curl openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span>
</code></pre></div></div>

<h3 id="2-wget">2. Wget</h3>

<p>Wget is a very useful CLI tool can be used to download the output into a file in the existing directory.</p>

<p>It can be used as follows:</p>

<div class="language-bash highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nv">$ </span>wget openlicensesapi.herokuapp.com/<span class="o">{</span><span class="nb">id</span><span class="o">}</span> <span class="nt">-O</span> LICENSE
</code></pre></div></div>
<p>Here the <code class="highlighter-rouge">-O</code> flag outputs the response to a file named <code class="highlighter-rouge">LICENSE</code></p>

<h1 id="acknowledgement">Acknowledgement</h1>

<p>Thanks to :</p>
<ul>
  <li>S.C. Chen : Author of <a href="http://simplehtmldom.sourceforge.net/">Simple Html Parser in PHP</a>.</li>
  <li>GitHub Inc: The owner of <a href="https://choosealicense.com/">choosealicense.org</a></li>
  <li>Authors of the <a href="https://github.com/pages-themes/cayman">Cayman</a> Jekyll Theme .</li>
</ul>


      <footer class="site-footer">
       
        <span class="site-footer-owner"><a href="https://github.com/abhishekbalam/openlicensesapi">Open License API </a> is maintained by <a href="https://github.com/abhishekbalam/">Abhishek Balam</a>.</span>
        <span class="site-footer-credits">This site is made with &hearts; using <a href="https://jekyllrb.com/" target="_blank">Jekyll</a>. </span>
      
      </footer>
    </section>
  </body>
</html>
