SELECT
	COUNT(clinic_opinions.id) count,
	clinics.name
	FROM
		clinics
	LEFT JOIN
		clinic_opinions
		ON
		clinics.id = clinic_opinions.clinic_id

	GROUP BY clinics.id
	HAVING count < 5
	ORDER BY count desc;