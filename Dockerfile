FROM golang

WORKDIR /src

#RUN yum install -y golang

COPY go.mod /src/

COPY go.sum /src/

COPY . .


RUN go run ./woker/main.go &

RUN go run ./starter/main.go

CMD [ "tail","-f","/dev/null" ]