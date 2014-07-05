Statamic-Loop
=============

> Loop stuff.

Loop over something n times or between a range.

## Installation
1. Download the zip file (or clone via git) and unzip it or clone the repo into /_add-ons/.
2. Change the folder name from `Statamic-Loop` to `loop`.

## Parameters
* `from`: Where to begin the loop. Defaults to `1`.
* `times`: Number of times to loop.
* `to`: Where to end the loop.

Use either `times` or `to`. Do not use both.

## Variables

* `value`: The current value of the loop.
* `index`: The number of the iteration.  
* `zero_index`: The zero-based index.


## Examples

### Count to 10.

~~~
{{ loop times="10" }}
  {{ value }}
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
		{{ if index == current_page }}
			{{ index }}
		{{ else }}
			<a href="{{ url }}?page={{ index }}">{{ index }}</a>
		{{ endif }}
	{{ /loop }}
{{ /entries:pagination }}
~~~

### Year selection

~~~
<select name="year">
{{ loop from="1995" to="2015" }}
  <option value="{{ value }}">{{ value }}</option>
{{ /loop }}
</select>
~~~
