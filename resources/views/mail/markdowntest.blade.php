@component('mail::message')
Hello,<br/>

This one is problematic<br/><br/>

Direct include works
@{{{pm:unsubscribe}}}<br/>

Once the tag is included in the href, it does no longer work
<a href="@{{{pm:unsubscribe}}}"> test </a>

Including it higher up in the template does not solve the problem. It's the parsing by the markdown that does the replacement of { and } by their websafe variants once inside a href-link.
@endcomponent
