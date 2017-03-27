
<? if(Auth::check()) {?>
{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}

{{Auth::user()->email}}
{{Auth::user()->reg}}
<?}
else {
	echo "Login First.";
	} ?>