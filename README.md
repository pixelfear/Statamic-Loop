Statamic-Loop
=============

Loop stuff.


## Examples

### Count to 10.

~~~
{{ loop times="10" }}
  {{ count }}
{{ /loop }}
~~~

### Number based pagination.

~~~
<ul>
{{ entries:listing folder="calendar" limit="10" }}
	<li>{{ title }}</li>
{{ /entries:listing }}
</ul>

{{ entries:pagination folder="calendar" limit="10" }}
	{{ loop times="{ total_pages }" }}
		{{ if count == current_page }}
			{{ count }}
		{{ else }}
			<a href="{{ url }}?page={{ count }}">{{ count }}</a>
		{{ endif }}
	{{ /loop }}
{{ /entries:pagination }}
~~~
