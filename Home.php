
    <!DOCTYPE HTML>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YUI CSS compressor - PHP</title>
        <link rel="stylesheet" type="text/css" href="third-party/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div id="body" class="span9">
                    <!--Body content-->
                    <div id="less-error-message" class="less-error-message"></div>
                    <div class="well">
                        <div id="input-container">
                            <label for="input-css">Paste a block of CSS to compress in the area below:</label>
                            <textarea id="input-css" class="input-block-level" rows="10"></textarea>
                        </div>
                        <div id="output-container" class="hide">
                            <label for="output-css">Here's your compressed CSS code:</label>
                            <span class="help-block">Original size: <span id="original-size"></span> bytes | Compressed size: <span id="compressed-size"></span> bytes | Bytes saved: <span id="bytes-saved"></span> | Compression ratio: <span id="compression-ratio"></span>%</span>
                            <textarea id="output-css" class="input-block-level" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="span3">
                    <form id="options-form">
                        <p class="submit">
                            <button type="submit" id="compress-btn" class="btn btn-primary btn-large" data-loading-text="Compressing...">Compress!</button>
                        </p>
                        <fieldset>
                            <legend>LESS</legend>
                            <p class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox" id="enable-less" value="1"> Enable compiler <span class="version">v1.7.5</span>
                                </label>
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Compressor options</legend>
                            <div class="control-group">
                                <label>Linebreak after <i>n</i> columns</label>
                                <input type="text" name="linebreak_pos" class="span1">
                            </div>
                            <div class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox" name="keep_sourcemap" value="1"> Keep CSS Sourcemap comment
                                </label>
                            </div>
                            <div class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox" name="remove_important_comments" value="1"> Remove important comments
                                </label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>PHP configuration options</legend>
                            <div class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox" name="raise_php" value="1" checked="checked"> Raise PHP configuration options
                                </label>
                                <label>Memory limit</label>
                                <select name="memory_limit" class="span2">
                                    <option value="32M">32M</option>
                                    <option value="64M">64M</option>
                                    <option value="128M" selected="selected">128M</option>
                                    <option value="256M">256M</option>
                                    <option value="512M">512M</option>
                                    <option value="1G">1G</option>
                                    <option value="-1">No limit</option>
                                </select>
                                <label>Max execution time</label>
                                <select name="max_execution_time" class="span2">
                                    <option value="30">30 secs</option>
                                    <option value="60" selected="selected">1 min</option>
                                    <option value="120">2 mins</option>
                                    <option value="300">5 mins</option>
                                </select>
                                <label>PCRE backtrack limit</label>
                                <select name="pcre_backtrack_limit" class="span2">
                                    <option value="100">100.000</option>
                                    <option value="1000" selected="selected">1.000.000</option>
                                    <option value="2000">2.000.000</option>
                                    <option value="5000">5.000.000</option>
                                </select>
                                <label>PCRE recursion limit</label>
                                <select name="pcre_recursion_limit" class="span2">
                                    <option value="100">100.000</option>
                                    <option value="250">250.000</option>
                                    <option value="500" selected="selected">500.000</option>
                                    <option value="1000">1.000.000</option>
                                </select>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            less = {
                env: 'development'
            };
        </script>
        <script type="text/javascript" src="third-party/less-1.7.5.min.js"></script>
        <script type="text/javascript" src="third-party/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="third-party/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
    </body>

    </html>
