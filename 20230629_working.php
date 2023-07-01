# 조직도 변경 1차 카테고리 적용 기획

############################################
기자조회 및 검색
1. View = Information/reporterlist 
2. Controllers = Information/Reporter 
3. Model = Information/Information_medel
############################################

- table = OrganChartFirst
oc_idx / bo_code / oc_subject / oc_number / oc_regdate / oc_modify

CREATE TABLE OrganChartFirst
(
	oc_idx	INT NOT NULL AUTO_INCREMENT COMMENT '일렬번호',
    bo_code VARCHAR(8) NOT NULL COMMENT '지사코드',
    oc_subject VARCHAR(100) NOT NULL COMMENT '1차제목',
    oc_number INT UNSIGNED NOT NULL COMMENT '출력순서',
    oc_regdate DATETIME NOT NULL DEFAULT NOW() COMMENT '등록일',
    oc_modify  DATETIME NOT NULL DEFAULT NOW() COMMENT '수정일',
    PRIMARY KEY (oc_idx)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='조직도1차카테고리';

처리내용