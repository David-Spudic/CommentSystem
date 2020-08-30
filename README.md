## PHP CommentSystem
![This is a alt text.](https://www.bilder-upload.eu/upload/5df096-1598814753.jpg)

This is a free, simple and open source PHP comment system created in PHP. Since it does not require a database to set it up, it can be included in almost any PHP application.

---

### Goals

1. developing a comment system that works without a database
2. to write a comment, it is not necessary to register.
3. the comments can be edited at any time (by an administrator)
4. the comments are saved as .TXT files
---

## How to use it

There are two files in the repository:

* postcomment.php 
* comment.php

Drag these files locally into your development environment. Then you can define a new comment section with the following code:

<pre><code>date_default_timezone_set('UTC');
include("comment.php");
comment("Filename, as example: Index.php");
</code></pre>
