<?php require "inc/head.php"; ?>
  <body>
    <section>
      <a href="https://github.com/beardlyness/NGINE"><h1 class="maintxt">NGINE</h1></a>
      <a href="https://nginx.org/en/docs/"><img class="logo" src="https://camo.githubusercontent.com/246d2b6c9f17db8aebb5b57b938229877433f2f3/68747470733a2f2f63646e2d312e77702e6e67696e782e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031382f30332f69636f6e2d4e47494e582d4f53532e737667" /></a>

        <p><code><a href="https://httpstatuses.com/407">Error 407 Proxy Authentication Required</a></code></p>
        <p>This is the 407 Error Page for NGINE.</p>
        <p>The proxy MUST send a Proxy-Authenticate header field containing a challenge applicable to that proxy for the target resource. The client MAY repeat the request with a new or replaced Proxy-Authorization header field.</p>
        <p>Server: <code><?php echo $server_ip; ?></code> | Visitor: <code><?php echo $origin_ip; ?></code></p>
        <p>Hostname: <code><?php echo $server_host; ?></code></p>
        <o>URI Request: <code><?php echo $url_path; ?></code></p>
        <p>Web Directory: <code>/var/www/html/domain/live</code></p>
    </section>

  </body>
</html>
