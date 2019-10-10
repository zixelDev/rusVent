SELECT t1.`name`as 'STARTTIME', (CASE WHEN t2.`name` is null THEN 'последний сеанс' else t2.name END ) as ENDTIME FROM `t_time_table` AS t1 LEFT JOIN `t_time_table` AS t2 ON t1.`sort` < t2.`sort` and t2.sort < t1.sort + 2 

/* если хотим вывести только последний сеанс добавляем код ниже
ORDER BY t1.id_time DESC LIMIT 1