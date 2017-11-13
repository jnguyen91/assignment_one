<h1>Flights ({role})</h1>
<table>
	<tr>
		<th>FLIGHT</th>
		<th>FROM</th>
		<th>TO</th>
		<th>DEPARTURE</th>
		<th>ARRIVAL</th>
	</tr>
	{flights}
		<tr>
			<tr>
				<td>
					{id}
				</td>
				<td>
					{departure_airport}
						<span title="{id} ({airport})">{community}</span>
					{/departure_airport}
				</td>
				<td>
					{arrival_airport}
						<span title="{id} ({airport})">{community}</span>
					{/arrival_airport}
				</td>
				<td>
					{departure_time}
				</td>
				<td>
					{arrival_time}
				</td>
			</tr>
		</tr>
	{/flights}
</table>