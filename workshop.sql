
CREATE DATABASE 	mujtaba_ali_constriction_and _technical_company CHARACTER SET utf8 COLLATE utf8_general_ci;
USE 	mujtaba_ali_constriction_and _technical_company;


CREATE TABLE	generator_registration_form (	
			g_r_id			int	primary key auto_increment,	
			g_r_date		   datetime NOT NULL,
			g_r_code	 	varchar(255)	NOT NULL,
			g_r_generator_location 	varchar(255)		NOT NULL ,
			g_r_serial_number		varchar(255)		NOT NULL ,
			g_r_engine_model 	varchar(255)		NOT NULL ,
			g_s_generator_type varchar(255) not null,
			g_s_generator_capacity varchar(255) not null,
			g_s_photo	 	varchar(255)	NOT NULL,
			create_at	datetime NOT NULL,
			update_at   datetime NOT NULL
			
);			
CREATE TABLE	generator_fragement_internal_registration_form (	
			g_f_r_id			int	primary key auto_increment,
			g_f_r_porduct_name		 varchar(255) NOT NULL,  
			g_f_r_status		 int	NOT NULL,
			g_f_r_quantity	 	int NOT NULL,
			g_f_r_remark		varchar(255)	NOT NULL,
			create_at	datetime NOT NULL,
			update_at   datetime NOT NULL,
			g_r_id	int not NULL ,
			CONSTRAINT g_r_fg_f_r_f FOREIGN KEY (g_r_id)  	REFERENCES generator_registration_form(g_r_id) ON DELETE CASCADE ON UPDATE CASCADE 			
);	
CREATE TABLE	generator_fragement_external_registration_form (	
			g_f_r_id			int	primary key auto_increment,
			g_f_r_porduct_name		 varchar(255) NOT NULL,  
			g_f_r_status		 int	NOT NULL,
			g_f_r_quantity	 	int NOT NULL,
			g_f_r_remark		varchar(255)	NOT NULL,
			create_at	datetime NOT NULL,
			update_at   datetime NOT NULL,
			g_r_id	int not NULL ,
			CONSTRAINT g_r_x_fg_f_r_f FOREIGN KEY (g_r_id)  	REFERENCES generator_registration_form(g_r_id) ON DELETE CASCADE ON UPDATE CASCADE 			
);



CREATE TABLE	stock_form (
			s_f_id		int	primary key auto_increment,
			s_f_date	datetime	NOT NULL,
			s_f_number	int	NOT NULL ,
			s_f_location		varchar(255)	NOT NULL ,
			s_f_porduct_name varchar(255)	NOT NULL ,
			s_f_properties varchar(255)	NOT NULL ,
			s_f_quantity int	NOT NULL ,
			s_f_types varchar(255)	NOT NULL ,
			s_f_serial_number varchar(255)	NOT NULL ,
			create_at	datetime NOT NULL,
			update_at   datetime NOT NULL
);
CREATE TABLE	workshop_engineer_for_stock	(
			w_e_id int primary key auto_increment,
			w_e_name  	int		NOT NULL UNIQUE,
			w_e_father_name		varchar(255)		NOT NULL ,
			w_e_last_name		varchar(255)		NOT NULL ,
			w_e_photo		varchar(255)		NOT NULL ,
			w_e_signature_photo		varchar(255)		NOT NULL ,
			create_at	datetime NOT NULL,
			update_at	datetime NOT NULL,
			s_f_id 	int 	NOT NULL,
			CONSTRAINT s_f_w_f_s FOREIGN KEY (s_f_id)  	REFERENCES stock_form(s_f_id) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE	purchase_form (
			p_f_id		int	primary key auto_increment,
			p_f_date	varchar(255)		NOT NULL	,
			p_f_number	int	NOT NULL ,
			p_f_location		varchar(255)	NOT NULL ,
			p_f_porduct_name varchar(255)	NOT NULL ,
			p_f_properties varchar(255)	NOT NULL ,
			p_f_quantity int	NOT NULL ,
			p_f_types varchar(255)	NOT NULL ,
			p_f_serial_number varchar(255)	NOT NULL ,
			create_at	datetime NOT NULL,
			update_at   datetime NOT NULL
);
CREATE TABLE	lock_file_generator_registration_form	(
			l_f_g_r_f_id int primary key auto_increment,
			name  	varchar(255)		NOT NULL ,
			father_name		varchar(255)		NOT NULL ,
			last_name		varchar(255)		NOT NULL ,
			photo		varchar(255)		NOT NULL ,
			signature_photo	varchar(255)		NOT NULL ,
			create_at	datetime NOT NULL,
			update_at	datetime NOT NULL,
			g_r_id  int  NOT NULL,
			CONSTRAINT l_f_g_r_f_g_r_f FOREIGN KEY (g_r_id)  	REFERENCES generator_registration_form(g_r_id) ON DELETE CASCADE ON UPDATE CASCADE	
);
CREATE TABLE	lock_file_generator_fragement_internal_registration_form	(
			l_f_id int primary key auto_increment,
			name  	varchar(255)		NOT NULL ,
			father_name		varchar(255)		NOT NULL ,
			last_name		varchar(255)		NOT NULL ,
			photo		varchar(255)		NOT NULL ,
			signature_photo	varchar(255)		NOT NULL ,
			create_at	datetime NOT NULL,
			update_at	datetime NOT NULL,
			g_f_r_id  int  NOT NULL,
			CONSTRAINT l_f_g_r_f_g_f_i_r_f FOREIGN KEY (g_f_r_id)  	REFERENCES generator_fragement_internal_registration_form(g_f_r_id) ON DELETE CASCADE ON UPDATE CASCADE	
);
CREATE TABLE	lock_file_generator_fragement_external_registration_form	(
			l_f_id int primary key auto_increment,
			name  	varchar(255)		NOT NULL ,
			father_name		varchar(255)		NOT NULL ,
			last_name		varchar(255)		NOT NULL ,
			photo		varchar(255)		NOT NULL ,
			signature_photo	varchar(255)		NOT NULL ,
			create_at	datetime NOT NULL,
			update_at	datetime NOT NULL,
			g_f_r_id  int  NOT NULL,
			CONSTRAINT l_f_g_r_f_g_f_x_r_f FOREIGN KEY (g_f_r_id)  	REFERENCES generator_fragement_internal_registration_form(g_f_r_id) ON DELETE CASCADE ON UPDATE CASCADE	
);
CREATE TABLE	generator_workflow_comments(
			g_w_c_id  int primary key auto_increment,
			g_w_c_comment  	varchar(255)		NOT NULL ,
			create_at	datetime NOT NULL,
			update_at	datetime NOT NULL,
			g_r_id	int not  NULL ,
			CONSTRAINT g_r_fg_w_f_c FOREIGN KEY (g_r_id)  	REFERENCES generator_registration_form(g_r_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE generator_workflow_photos (
			g_w_p_id int  primary key auto_increment,
			g_w_p_photo varchar(255)		NOT NULL ,
			g_w_c_id	int  not NULL ,
			CONSTRAINT g_w_f_cg_w_f_p FOREIGN KEY (g_w_c_id)  	REFERENCES generator_workflow_comments(g_w_c_id) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE products(
	product_id int primary key auto_increment,
	product_name varchar(255) not null	
);
		


CREATE TABLE	users (
		user_id int primary key auto_increment,
		username varchar(64) not null unique ,
		password varchar(64) not null ,
		name	 varchar(255) not null ,
		last_name	varchar(255) not null,
		father_name varchar(255) not null,
		photo	varchar(255) not null,
		signature_photo	varchar(255) not null,
		user_type	varchar(255) not null,
		create_at	datetime NOT NULL,
		update_at	datetime NOT NULL
);
