# scripting

1. DDL(Data Definition language);
create,drop,alter,rename


2. DML (Data manipulation language);
select --> Retrieve
insert --> Create
update --> update
delete
merge

3. TLC (transaction control language):

commit
rollback
set transaction

4. Data control language(DCL)

read access,R/W access,access

grant,revoke


//insert query

insert into blog (title,details) VALUES ('DR.Yvbaraj khatiwada to be the embassador for USA', 'Government of nepal is about to appoint DR Ybbaraj khatiwada as embassador of nepal for nepal');

//select query // *->all

select * from blog where id ='1';
select * from blog where id ='2' or title = 'kp oli';
select * from blog where id ='2' and title = 'kp oli';

//update query

update blog set title = 'DR.Govinda kc',details = 'He is great social activities.' where id = '2';

//delete query

delete from blog where title = 'DR.Govinda kc';
