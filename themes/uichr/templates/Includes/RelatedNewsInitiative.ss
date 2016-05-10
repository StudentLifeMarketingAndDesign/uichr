<% if URLSegment = working-groups %>
	<% with Page(uichr-news) %>
		<% if $Entries('','workinggroups') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','workinggroups') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>

<% if URLSegment = food %>
	<% with Page(news) %>
		<% if $Entries('','food') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','food') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>

<% if URLSegment = transportation %>
	<% with Page(news) %>
		<% if $Entries('','transportation') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','transportation') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>

<% if URLSegment = biomass-fuel-project %>
	<% with Page(news) %>
		<% if $Entries('','biomass') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','biomass') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>

<% if $URLSegment = energy-climate %>
	<% with Page(news) %>
		<% if $Entries('','energy') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','energy') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>

<% if $URLSegment = recycling %>
	<% with Page(news) %>
		<% if $Entries('','recycling') %>
			<div class="relatednews">
				<div class="container">
					<h2>Related News</h2>
					<% loop $Entries('3','recycling') %>
						<% include RelatedNewsContent %>
					<% end_loop %>
				</div>
			</div>
		<% end_if %>
	<% end_with %>
<% end_if %>



