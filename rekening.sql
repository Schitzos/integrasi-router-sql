/*
Navicat SQL Server Data Transfer

Source Server         : Integrasi
Source Server Version : 140000
Source Host           : MAMMOTH:1433
Source Database       : integrasi
Source Schema         : dbo

Target Server Type    : SQL Server
Target Server Version : 140000
File Encoding         : 65001

Date: 2018-11-07 09:29:27
*/


-- ----------------------------
-- Table structure for rekening
-- ----------------------------
DROP TABLE [dbo].[rekening]
GO
CREATE TABLE [dbo].[rekening] (
[id_rekening] int NOT NULL IDENTITY(1,1) ,
[nomor_rekening] varchar(255) NOT NULL ,
[id_tipe_paket] int NULL 
)


GO
DBCC CHECKIDENT(N'[dbo].[rekening]', RESEED, 111)
GO

-- ----------------------------
-- Records of rekening
-- ----------------------------
SET IDENTITY_INSERT [dbo].[rekening] ON
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'1', N'1.04.1.04.01.09.02.5.2.2.20', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'2', N'1.04.1.04.01.22.02.5.2.2.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'3', N'1.04.1.04.01.22.06.5.2.1.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'4', N'1.04.1.04.01.22.06.5.2.2.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'5', N'1.04.1.04.01.22.06.5.2.3.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'6', N'5.2.1.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'7', N'5.2.1.01.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'8', N'5.2.1.01.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'9', N'5.2.1.01.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'10', N'5.2.1.01.04.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'11', N'5.2.1.01.05.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'12', N'5.2.1.03', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'13', N'5.2.1.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'14', N'5.2.1.03.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'15', N'5.2.2..15.02', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'16', N'5.2.2.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'17', N'5.2.2.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'18', N'5.2.2.01.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'19', N'5.2.2.01.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'20', N'5.2.2.01.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'21', N'5.2.2.01.04.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'22', N'5.2.2.01.05.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'23', N'5.2.2.01.06.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'24', N'5.2.2.01.08.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'25', N'5.2.2.01.09.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'26', N'5.2.2.01.10', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'27', N'5.2.2.01.11.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'28', N'5.2.2.02.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'29', N'5.2.2.02.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'30', N'5.2.2.03', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'31', N'5.2.2.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'32', N'5.2.2.03.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'33', N'5.2.2.03.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'34', N'5.2.2.03.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'35', N'5.2.2.03.10.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'36', N'5.2.2.03.11', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'37', N'5.2.2.03.11.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'38', N'5.2.2.03.15.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'39', N'5.2.2.03.20.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'40', N'5.2.2.06.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'41', N'5.2.2.06.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'42', N'5.2.2.06.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'43', N'5.2.2.06.02', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'44', N'5.2.2.06.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'45', N'5.2.2.07.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'46', N'5.2.2.07.05', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'47', N'5.2.2.11.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'48', N'5.2.2.11.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'49', N'5.2.2.12.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'50', N'5.2.2.12.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'51', N'5.2.2.15.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'52', N'5.2.2.15.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'53', N'5.2.2.15.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'54', N'5.2.2.15.02', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'55', N'5.2.2.15.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'56', N'5.2.2.18.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'57', N'5.2.2.20.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'58', N'5.2.2.20.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'59', N'5.2.2.20.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'60', N'5.2.2.20.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'61', N'5.2.2.21.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'62', N'5.2.2.21.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'63', N'5.2.2.21.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'64', N'5.2.2.21.10', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'65', N'5.2.2.23.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'66', N'5.2.2.25.03', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'67', N'5.2.2.25.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'68', N'5.2.2.28.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'69', N'5.2.2.28.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'70', N'5.2.3.04.03.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'71', N'5.2.3.06.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'72', N'5.2.3.06.02', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'73', N'5.2.3.06.03', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'74', N'5.2.3.07.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'75', N'5.2.3.07.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'76', N'5.2.3.11.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'77', N'5.2.3.21.02.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'78', N'5.2.3.21.03', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'79', N'5.2.3.25.01', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'80', N'5.2.3.25.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'81', N'5.2.3.26.07.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'82', N'5.2.3.29.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'83', N'5.2.3.38.01.', N'1')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'84', N'5.2.2.15.01', N'2')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'85', N'5.2.2.15.01.', N'2')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'86', N'5.2.2.15.02', N'3')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'87', N'5.2.2.15.02.', N'3')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'88', N'5.2.2.01.01.', N'4')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'89', N'5.2.2.03.', N'4')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'90', N'5.2.2.11.01.', N'5')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'91', N'5.2.2.11.02.', N'5')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'92', N'5.2.2.28.01', N'5')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'93', N'5.2.2.06.', N'6')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'94', N'5.2.2.06.01', N'6')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'95', N'5.2.2.06.02', N'6')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'96', N'5.2.2.06.02.', N'6')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'97', N'5.2.1.01.01', N'7')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'98', N'5.2.1.01.01.', N'7')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'99', N'5.2.2.25.04', N'7')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'100', N'5.2.1.01.02', N'8')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'101', N'5.2.1.01.02.', N'8')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'102', N'5.2.1.01.06.', N'8')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'103', N'5.2.1.01.01.', N'9')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'104', N'5.2.1.01.05', N'9')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'105', N'5.2.1.01.05.', N'9')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'106', N'5.2.2.03.20', N'9')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'107', N'5.2.1.01', N'10')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'108', N'5.2.1.01.03', N'10')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'109', N'5.2.1.01.03.', N'10')
GO
GO
INSERT INTO [dbo].[rekening] ([id_rekening], [nomor_rekening], [id_tipe_paket]) VALUES (N'110', N'5.2.2.28.01', N'11')
GO
GO
SET IDENTITY_INSERT [dbo].[rekening] OFF
GO

-- ----------------------------
-- Indexes structure for table rekening
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table rekening
-- ----------------------------
ALTER TABLE [dbo].[rekening] ADD PRIMARY KEY ([id_rekening])
GO

-- ----------------------------
-- Foreign Key structure for table [dbo].[rekening]
-- ----------------------------
ALTER TABLE [dbo].[rekening] ADD FOREIGN KEY ([id_tipe_paket]) REFERENCES [dbo].[tipe_paket] ([id_tipe_paket]) ON DELETE NO ACTION ON UPDATE NO ACTION
GO
