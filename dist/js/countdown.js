$(document).ready(function(){var t,o,n;n=moment("2018-03-31 00:00 +3:00").toDate(),t=n,o=$(".topper-clock"),$(o).countdown(t,function(t){var o=t.strftime("%D:%H:%M");$(this).text(o)})});