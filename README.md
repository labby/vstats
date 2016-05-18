###vstats (visitor statistics)
=========
LEPTON addon, displays website statistics as an admintool

#### Requirements

* [LEPTON CMS][1], Version > 2.1.0


#### Installation

* download latest [signup.zip] [2] installation archive
* in CMS backend select the file from "Add-ons" -> "Modules" -> "Install module"

#### Configuration

To include the counter to your website add the following line to your template(s), somewhere in the first <?php ... ?> block;

include (LEPTON_PATH.'/modules/vstats/count.php');


[1]: http://lepton-cms.org "LEPTON CMS"
[2]: http://www.lepton-cms.com/lepador/admintools/vstats.php
