# - фильтруем: grep "Fatal Error"
# - сортируем, для правильной группировки: sort
# - группируем, выводя кол-во повторов: uniq -ci
# - сортируем по кол-ву повторов: sort -grb
# - выводим первые 10 ошибок(самых частых)

cat file.log | grep "Fatal Error" | sort | uniq -ci | sort -gbr | head -n 10