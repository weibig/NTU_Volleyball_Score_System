import numpy as np
import pandas as pd
import glob
import csv

week=['Mon' , 'Tue' , 'Wed' , 'Thr' , 'Fri']

def findFiles(path): return glob.glob(path)

referee_list = []
team_list = []

for filename in findFiles('data/input/referee_*.csv'):
    df = pd.read_csv(filename)
    df.columns = ['Referee' , 'Team' , 'Mon' , 'Tue' , 'Wed' , 'Thr' , 'Fri']
    referee_list.append(df)

for filename in findFiles('data/input/Team_*.csv'):
    df = pd.read_csv(filename)
    df.columns = ['Team', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri']
    team_list.append(df)

referee = pd.concat([referee_list[i] for i in range(len(referee_list))],axis=0)
team = pd.concat([team_list[i] for i in range(len(team_list))])

team['Class'] = 0
referee['Class'] = 0

schedule = pd.DataFrame(columns = week)

for w in week:
	team = team.sort_values(by = week, ascending = False)
	k = 0
	l = []
	for index, row in team.iterrows():
	    if k < 8 and row['Class'] == 0:
	        num = row['Team']
	        row['Class'] = 1
	        l.append(num)
	        k = k + 1
	schedule[w] = l


for index, row in referee.iterrows():
    for w in week:
        if pd.Series([row['Team']]).isin(pd.Series(schedule[w])).any():
            row[w]=0

schedule_referee = pd.DataFrame(columns = week)

for w in week:
    referee = referee.sort_values(by = week, ascending = False)
    k = 0
    l = []
    for index, row in referee.iterrows():
        if k < 4 and row['Class'] == 0 and row[w] == 1:
            num = row['Referee']
            row['Class'] = 1
            l.append(num)
            k = k + 1
    if k != 4:
        for i in range(4-k):
            l.append('')
    schedule_referee[w] = l

final_schedule = pd.DataFrame(columns = week)

for w in week:
    l = []
    l.append(str(schedule.loc[0, w])+'-'+str(schedule.loc[1, w]))
    final_schedule.loc[0,w] = l
    final_schedule.loc[1,w] = schedule_referee.loc[0,w]
    l2 = []
    l2.append(str(schedule.loc[2, w])+'-'+str(schedule.loc[3, w]))
    final_schedule.loc[2,w] = l2
    final_schedule.loc[3,w] = schedule_referee.loc[1,w]
    l3 = []
    l3.append(str(schedule.loc[4, w])+'-'+str(schedule.loc[5, w]))
    final_schedule.loc[4,w] = l3
    final_schedule.loc[5,w] = schedule_referee.loc[2,w]
    l4 = []
    l4.append(str(schedule.loc[6, w])+'-'+str(schedule.loc[7, w]))
    final_schedule.loc[6,w] = l4
    final_schedule.loc[7,w] = schedule_referee.loc[3,w]

new_final_schedule = final_schedule
idx = 0
new_col = ['court 4', 'referee', 'court 5', 'referee', 'court 6', 'referee', 'court 7', 'referee']  # can be a list, a Series, an array or a scalar   
new_final_schedule.insert(loc=idx, column='', value=new_col)


with open('data/output/final.csv', 'w', newline='') as csvfile:
    writer = csv.writer(csvfile)
    writer.writerow(['','Mon' , 'Tue' , 'Wed' , 'Thr' , 'Fri'])
    for index, row in new_final_schedule.iterrows():
        writer.writerow(row)

print("Succeed!")
